#include <stdio.h>
#include <time.h>
#include <stdlib.h>
#include <windows.h>
#include "colors.h"
#include "welcome.h"
#include "plante.h"
#include "credits.h"


void affichage()
{
  int i;
  for (i = 0; i < 5; ++i)
{
  Color(10, 0);
    printf("\n\n");

    printf("\t\t\t\t************************************************\n");

    printf("\t\t\t\t*            BIENVENUE SUR YPLANT              *\n");

    printf("\t\t\t\t************************************************\n");

    printf("\n\n");

    Color(15, 0);
    Sleep (100);
    system("cls");
    Sleep(50);
}
Color(10, 0);
    printf("\n\n");

    printf("\t\t\t\t************************************************\n");

    printf("\t\t\t\t*            BIENVENUE SUR YPLANT              *\n");

    printf("\t\t\t\t**********************************************ù*\n");

    printf("\n\n");
    welcome_screen();
}

void welcome_screen()
{
    char choix_1[] = "1. Je suis proprietaire d'une plante";
    char choix_2[] = "2. Je ne suis pas proprietaire";
    char choix_3[] = "3. DevTeam";
    char choix_4[] = "4. Acceder a mon compte";
    int way = 1;
    Color(15,0);
    printf("B");
    Sleep (20);
    printf("i");
    Sleep (20);
    printf("e");
    Sleep (20);
    printf("n");
    Sleep (20);
    printf("v");
    Sleep (20);
    printf("e");
    Sleep (20);
    printf("n");
    Sleep (20);
    printf("u");
    Sleep (20);
    printf("e");
    Sleep (20);
    printf(" s");
    Sleep (20);
    printf("u");
    Sleep (20);
    printf("r");
    Sleep (20);
    printf(" Y");
    Sleep (20);
    printf("P");
    Sleep (20);
    printf("l");
    Sleep (20);
    printf("a");
    Sleep (20);
    printf("n");
    Sleep (20);
    printf("t");
    Sleep (200);
    Color(15, 0);
    printf("\n \n \n");
    printf("Quelle est votre destination ?");
    printf("\n \n \n");
    printf(" %s \n %s \n %s \n %s ",choix_1, choix_2,choix_3,choix_4);
    printf("\n \n \n");
    printf("Choisissez un numero : ");
    scanf("%d",&way);
    printf("\n \n \n");
    myway(way);
}

void myway(int c)
{
    if (c == 1 || c == 2 || c == 3 || c == 4)
    {
      if (c == 1)
        {
            plantes();
        }
        else if (c == 2)
        {
            ShellExecute(NULL, "open", "http://yplant.fr", NULL, NULL, SW_SHOWNORMAL);
            ExitProcess(0);
        }
        else if (c == 3)
        {
            credit();
        }
        else if (c == 4)
        {
            ShellExecute(NULL, "open", "http://manager.yplant.fr", NULL, NULL, SW_SHOWNORMAL);
            ExitProcess(0);
        }
    } else {
    system("cls");
    affichage();
    }
}

