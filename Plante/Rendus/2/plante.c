#include <stdio.h>
#include <time.h>
#include <stdlib.h>
#include <windows.h>
#include "colors.h"
#include "Violette.h"
#include "Treflesr.h"
#include "Epiaire.h"
#include "Stipe.h"
void plantes()
{
    char choix_1[100] = "1.  Violette des chiens";
    char choix_2[100] = "2.  Trefle Rougeatre";
    char choix_3[100] = "3.  Epiaire des bois";
    char choix_4[100] = "4.  Stipe de France";
    char choix_5[100] = "5.  Lychnide fleur de coucou";
    char choix_6[100] = "6.  Silene penche";
    char choix_7[100] = "7.  Orpin acre";
    char choix_8[100] = "8.  Orpin blanc";
    char choix_9[100] = "9.  Scabieuse blanchatre";
    char choix_10[100] = "10. Scabieuse colombaire";
    char choix_11[100] = "11. Primevere acaule";
    char choix_12[100] = "12. Origan commun";
    char choix_13[100] = "13. Menthe a feuilles rondes";
    char choix_14[100] = "14. Lysimaque commune";
    char choix_15[100] = "15. Gesse des pres";
    char choix_16[100] = "16. Millepertuis perfore";
    char choix_17[100] = "17. Lierre terrestre";
    char choix_18[100] = "18. Asperule odorante";
    char choix_19[100] = "19. Reine des pres ";
    char choix_20[100] = "20. Epilobe a feuilles etroites";
    char choix_21[100] = "21. Eupatoire chanvrine";
    char choix_22[100] = "22. Butome en ombelle";
    char choix_23[100] = "23. Achillee millefeuille";
    char choix_24[100] = "24. Achillee sternutatoire";
    char choix_25[100] = "25. Bugle rampante";
    char choix_26[100] = "26. Plantain d'eau commun";
    char choix_27[100] = "27. Guimauve officinale";
    char choix_28[100] = "28. Populage des marais";
    char choix_29[100] = "29. Erable champetre";
    char choix_30[100] = "30. Grande cousoude";

    system("cls");
    int profile;
    Color(2,0);

    //printf("Choisissez un   : ");
   // Color(15,0);
    //int i = 0;

    //scanf("%c",& );
    Color(15,0);
    system("cls");
    Color(2,0);

    printf("Nos plantes :\n");
    Color(15,0);
    printf("%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n",choix_1,choix_2,choix_3,choix_4,choix_5,choix_6,choix_7,choix_8,choix_9,choix_10,choix_11,choix_12,choix_13,choix_14,choix_15,choix_16,choix_17,choix_18,choix_19,choix_20,choix_21,choix_22,choix_23,choix_24,choix_25,choix_26,choix_27,choix_28,choix_29,choix_30);
    Color(2,0);
    printf("\nChoisissez une plante  : ");
    scanf("%d",&profile);
    Sleep (100);
    system("cls");
    while (profile == 1 || profile == 2 || profile == 3 || profile == 4 || profile == 5 || profile == 6 || profile == 7 || profile == 8 || profile == 9 || profile == 10 || profile == 11 || profile == 12 || profile == 13 || profile == 14 || profile == 15 || profile == 16 || profile == 17 || profile == 18 || profile == 19 || profile == 20 || profile == 21 || profile == 22 || profile == 23 || profile == 24 || profile == 25 || profile == 26 || profile == 27 || profile == 28 || profile == 29 || profile == 30)
    {
    if (profile == 1)
        {
        Violette();
        }
    else if (profile == 2)
        {

        Trefles();

        }
    else if (profile == 3)
        {

        Epiaire();

        }
    else if (profile == 4)
        {

      /*  Stipe();*/

        }
    else if (profile == 5)
        {
        /*
        Lychnide( );
        */
        }
     else if (profile == 6)
        {
        /*
        Silene( );
        */
        }
    else if (profile == 7)
        {
        /*
        OrpinA( );
        */
        }
    else if (profile == 8)
        {
        /*
        OrpinB( );
        */
        }
    else if (profile == 9)
        {
        /*
        ScabieuseB( );
        */
        }
     else if (profile == 10)
        {
        /*
        ScabieuseC( );
        */
        }
    else if (profile == 11)
        {
        /*
        Primevere( );
        */
        }
    else if (profile == 12)
        {
        /*
        Origan( );
        */
        }
    else if (profile == 13)
        {
        /*
        Menthe( );
        */
        }
     else if (profile == 14)
        {
        /*
        Lysimaque( );
        */
        }
    else if (profile == 15)
        {
        /*
        Gesse( );
        */
        }
    else if (profile == 16)
        {
        /*
        Millepertuis( );
        */
        }
    else if (profile == 17)
        {
        /*
        Lierre( );
        */
        }
     else if (profile == 18)
        {
        /*
        Asperule( );
        */
        }
    else if (profile == 19)
        {
        /*
        Reine( );
        */
        }
    else if (profile == 20)
        {
        /*
        Epilobe( );
        */
        }
    else if (profile == 21)
        {
        /*
        Eupatoire( );
        */
        }
     else if (profile == 22)
        {
        /*
        Butome( );
        */
        }
    else if (profile == 23)
        {
        /*
        AchilleeM( );
        */
        }
    else if (profile == 24)
        {
        /*
        AchilleeS( );
        */
        }
    else if (profile == 25)
        {
        /*
        Bugle( );
        */
        }
     else if (profile == 26)
        {
        /*
        Plantain( );
        */
        }
    else if (profile == 27)
        {
        /*
        Guimauve( );
        */
        }
    else if (profile == 28)
        {
        /*
        Populage( );
        */
        }
    else if (profile == 29)
        {
        /*
        Erable( );
        */
        }
    else if (profile == 30)
        {
        /*
        Cousoude( );
        */
        }

        break;
    }
}

