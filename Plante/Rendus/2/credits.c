#include <stdio.h>
#include <time.h>
#include <stdlib.h>
#include <windows.h>
#include "colors.h"
#include "welcome.h"
#include "plante.h"
#include "credits.h"


void credit()
{
    system("cls");
    Color(10, 0);
    printf("\n\n");

    printf("\t\t\t\t*********************************************\n");

    printf("\t\t\t\t*                Copyright                  *\n");

    printf("\t\t\t\t*********************************************\n");

    printf("\n\n");
    Color(15, 0);
    printf("YPlant a ete concu dans le but de vous facilite la tache lorsque vous souhaitez arroser vos plantes, mais qui sont les developpeurs ? \n\n\n");
    Color(6, 0);
    printf("Hadil F. : ");
    Color(15, 0);
    printf("Description a venir");
    printf("\n\n");
    Sleep (3000);
    Color(14, 0);
    printf("Chris D. : ");
    Color(15, 0);
    printf("Il gere la partie backend du logiciel mais aussi du site internet.");
    printf("\n\n");
    Sleep (8000);
    affichage();
}

