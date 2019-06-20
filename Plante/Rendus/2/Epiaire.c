#include <stdio.h>
#include <time.h>
#include <stdlib.h>
#include <windows.h>
#include "epiaire.h"
#include "colors.h"
#include "plante.h"


void Epiaire()
{
    Color(10, 0);
    printf("\n\n");

    printf("\t\t\t\t************************************************\n");

    printf("\t\t\t\t*               Epiaire des bois               *\n");

    printf("\t\t\t\t************************************************\n");

    printf("\n\n");

    Color(15, 0);
    Sleep (100);
    system("cls");
    Sleep(50);
    Color(10, 0);
    printf("\n\n");

    printf("\t\t\t\t************************************************\n");

    printf("\t\t\t\t*               Epiaire des bois               *\n");

    printf("\t\t\t\t************************************************\n");

    printf("\n\n");

    Color(15,0);
    int choix ;
    printf("- L'Epiaire des bois. \n");
    Sleep (1000);
    printf("- Plante de la famille des Lamiaceae. \n");
    Sleep (1000);
    printf("- Plante herbacee vivace de la famille des Lamiacees. Les feuilles froissees degagent une odeur tres desagreable evoluant vers un arome proche du cepe. \n");
    Sleep (1000);
    printf("- Plante qui murie dans des endroits moyens. \n");
    Sleep (1000);
    printf("- Plante qui est indifferente et aime l'ombre a l'exposition de la luminosite. \n");
    Sleep (1000);
    printf("- Plante generalement presente durant les periodes de Juillet a Septembre. \n");
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
            ShellExecute(NULL, "open", "http://4.bp.blogspot.com/-ssrIDK1r3-A/T4gQaKgDAII/AAAAAAAAADY/UYz-dZSDPHI/s1600/Photos+divers+139.jpg", NULL, NULL, SW_SHOWNORMAL);
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






