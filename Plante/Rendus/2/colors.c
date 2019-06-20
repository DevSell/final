#include <stdio.h>
#include <time.h>
#include <stdlib.h>
#include <windows.h>
#include "colors.h"


void Color(int couleurDuTexte,int couleurDeFond) // fonction d'affichage de couleurs
{
        HANDLE H=GetStdHandle(STD_OUTPUT_HANDLE);
        SetConsoleTextAttribute(H,couleurDeFond*16+couleurDuTexte);
}



