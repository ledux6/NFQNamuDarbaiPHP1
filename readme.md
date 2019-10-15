Root:
Paima kintamuosius ir PHP automatiskai bando konvertuoti i floatus kad visus būtų galima sudėti.
NotTyped:
Paima kintamuosius ir konvertuoja atitinkamai kad visus būtų galima sudėti, taip pat kaip Root, ir paskui prieš returninant sumą konvertuoja tipą į intą.
Soft:
Kintamieji jei galima konvertuojami į prefered type, šiuo atveju int, jei konvertavimas negalimas išmetama klaida.
Strict:
Kadangi funkciją kviečiame iš failo kuriame nėra aktyvuotas strict_type, tai failo viduje nurodytas strict_type yra ignoruojamas ir veikia taip pat kaip Soft. Strict_type aktyvavimas nusako, kad funkcija gali priimti tik nurodyto tipo kintamuosius ir jokių tipo konversijų neatlieka.