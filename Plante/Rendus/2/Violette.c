#include <stdio.h>
#include <time.h>
#include <stdlib.h>
#include <windows.h>
#include "Violette.h"
#include "colors.h"
#include "plante.h"


void Violette()
{
    Color(10, 0);
    printf("\n\n");

    printf("\t\t\t\t************************************************\n");

    printf("\t\t\t\t*            VIOLETTE DES CHIENS               *\n");

    printf("\t\t\t\t************************************************\n");

    printf("\n\n");

    Color(15, 0);
    Sleep (100);
    system("cls");
    Sleep(50);
    Color(10, 0);
    printf("\n\n");

    printf("\t\t\t\t************************************************\n");

    printf("\t\t\t\t*            VIOLETTE DES CHIENS               *\n");

    printf("\t\t\t\t************************************************\n");

    printf("\n\n");

    Color(15,0);
    int choix ;
    printf("- La violette des chiens. \n");
    Sleep (1000);
    printf("- Plante de la famille des Violaceae. \n");
    Sleep (1000);
    printf("- Plante haute de 5 a 30 cm, formant des touffes basses, aux tiges radicantes, etalees puis redressees. Ses feuilles sont en forme de lance, avec un limbe crenele, plus ou moins corde a la base, au long etiole stipule, vert vif a vert bleute. \n");
    Sleep (1000);
    printf("- Plante qui murie dans des endroits secs. \n");
    Sleep (1000);
    printf("- Plante qui est indifferente a l'exposition de la luminosite. \n");
    Sleep (1000);
    printf("- Plante generalement presente durant les periodes d'Avril a Mai. \n");
    Sleep (1000);
    printf("- Plante n'ayant pas de temperature ideale. \n");
    printf("\n\n");
    Sleep (1000);
    char retour[100] = "1. Retour au choix";
    char visualiser[100] = "2. Visualiser la plante";
    char visiter[100] = "3. Visiter le site";
    printf("%s\n%s\n%s",retour,visualiser,visiter);
    printf("\n\nChoisissez votre destination : ");
    Color(15,0);
    scanf("%d",&choix);

    while (choix == 1 || choix == 2 || choix == 3)
    {
      if (choix == 1)
        {
            plantes();
        }
        else if (choix == 2)
        {
            ShellExecute(NULL, "open", "http://lacour.pierre.free.fr/pages08/img1/viola_canina_0486.jpg", NULL, NULL, SW_SHOWNORMAL);
            plantes();
        }
        else if (choix == 3)
        {
            ShellExecute(NULL, "open", "https://yplant.fr", NULL, NULL, SW_SHOWNORMAL);
            plantes();
        }

        break;
    }
}



