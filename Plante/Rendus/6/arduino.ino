#include "DHT.h"   // Librairie des capteurs DHT

#include <ESP8266WiFi.h>


#define DHTPIN 4    // Changer le pin sur lequel est branché le DHT


#define DHTTYPE DHT22       // DHT 22  (AM2302)



DHT dht(DHTPIN, DHTTYPE); 

const char* ssid = "iPhone de Hadil";
const char* password = "hadil123";
 
int ledPin = 16; 
WiFiServer server(80);
 
void setup() 
{

  
  // initialisation de la communication série
  Serial.begin(115200);
  
  delay(100);

  // initialisation de la sortie pour la led 
  
  pinMode(ledPin, OUTPUT);
  digitalWrite(ledPin, LOW);
 
  // Connexion wifi
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);
 
  WiFi.begin(ssid, password);

  // connection  en cours ...
  while (WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.print(".");
  }

  // Wifi connecter
  Serial.println("WiFi connecter");
 
  // Démmarrage du serveur.
  server.begin();
  Serial.println("Serveur demarrer !");
 
  // Affichage de l'adresse IP
  Serial.print("Utiliser cette adresse URL pour la connexion :");
  Serial.print("http://");
  Serial.print(WiFi.localIP());
  Serial.println("/");

  dht.begin();
 
}
 
void loop() 
{
  delay(2000);

// Lecture du taux d'humidité
  float h = dht.readHumidity();
  // Lecture de la température en Celcius
  float t = dht.readTemperature();
  // Pour lire la température en Fahrenheit
  float f = dht.readTemperature(true);

  // Stop le programme et renvoie un message d'erreur si le capteur ne renvoie aucune mesure
  if (isnan(h) || isnan(t) || isnan(f)) {
    Serial.println("Echec de lecture !");
    return;
  }

  // Calcul la température ressentie. Il calcul est effectué à partir de la température en Fahrenheit
  // On fait la conversion en Celcius dans la foulée
  float hi = dht.computeHeatIndex(f, h);



  
WiFiClient client;

  
  // Vérification si le client est connecter.
  client = server.available();
  if (!client)
  {
    return;
  }
 
  // Attendre si le client envoie des données ...
  Serial.println("nouveau client");
  while(!client.available()){
    delay(1);
  }
 
  String request = client.readStringUntil('\r');
  Serial.println(request);
  client.flush();

  int value = LOW;
  if (request.indexOf("/LED=ON") != -1)  {
    digitalWrite(ledPin, HIGH); // allumer la led
    value = HIGH;
  }
  if (request.indexOf("/LED=OFF") != -1)  {
    digitalWrite(ledPin, LOW); // éteindre la led
    value = LOW;
  }
 
  // Réponse
  client.println("HTTP/1.1 200 OK");
  client.println("Content-Type: text/html");
  client.println(""); 
  client.println("<!DOCTYPE HTML>");
  client.println("<html>");

   client.println("<br><br>");
 
 
  client.print("lampe : ");// pour la luminosité
 
  if(value == HIGH) {
    client.print("On");
  } else {
    client.print("Off");
  }
  client.println("<br><br>");
  
  client.print("temperature actuel : ");
  client.print(t);
   client.println("<br><br>");
  client.print("Humidité actuel  : ");
  client.print(h);
  
  client.println("<br><br>");
  client.println("<a href=\"/LED=ON\"\"><button>Allumer </button></a>");
  client.println("<a href=\"/LED=OFF\"\"><button>Eteindre </button></a><br />");  
  client.println("</html>");
 
  delay(1);
  Serial.println("Client deconnecter");
  Serial.println("");
 
}
