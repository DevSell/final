#include <stdio.h>
#include <time.h>
#include <stdlib.h>
#include <windows.h>
#include "treflesr.h"
#include "plante.h"
#include "colors.h"


void Trefles()
{
    Color(10, 0);
    printf("\n\n");

    printf("\t\t\t\t************************************************\n");

    printf("\t\t\t\t*               TREFLE ROUGEATRE               *\n");

    printf("\t\t\t\t************************************************\n");

    printf("\n\n");

    Color(15, 0);
    Sleep (100);
    system("cls");
    Sleep(50);
    Color(10, 0);
    printf("\n\n");

    printf("\t\t\t\t************************************************\n");

    printf("\t\t\t\t*               TREFLE ROUGEATRE               *\n");

    printf("\t\t\t\t************************************************\n");

    printf("\n\n");

    Color(15,0);
    int choix;
    printf("- Le Trefle Rougeatre. \n");
    Sleep (1000);
    printf("- Plante de la famille des Fabaceae. \n");
    Sleep (1000);
    printf("- Encore appele trefle rouge ou queue de renard, est une plante herbacee rhizomateuse vivace de la famille des Fabacees. \n");
    Sleep (1000);
    printf("- Plante qui murie dans des endroits secs et moyens. \n");
    Sleep (1000);
    printf("- Plante qui est indifferente a l'exposition de la luminosite. \n");
    Sleep (1000);
    printf("- Plante generalement presente durant les periodes de Juin a Juillet. \n");
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
            ShellExecute(NULL, "open", "http://i20.servimg.com/u/f20/11/30/53/76/photo_48.jpg", NULL, NULL, SW_SHOWNORMAL);
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





