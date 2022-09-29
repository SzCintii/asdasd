# Követelmény Specifikáció!


## Áttekintés

- Az alkalmazás egy filmkölcsönzős weboldal ahol a felhasználó regisztráció és bejelentkezés után érheti el a kölcsönző felületét, melyen tud a felhasználó CRUD műveleteket végrehajtani.

## Jelenlegi helyzet

- Manapság mindenki streaming szolgáltatást vesz igénybe, viszont ez nem mindig költséghatékony mert van, hogy csak egy-egy filmet akar megnézni az ember havonta.
- Rengeteg embernek van felhalmozott DVD, Blu-ray (stb.) a tulajdonában és ez számukra is egy fajta jövedelem forrással szolgálhat.

## Vágyálom

- Célunk az, hogy a weboldalon probléma nélkül lehessen kölcsönözni és kölcsönbe adni filmeket minden akadály és a felhasználók megkárosítása nélkül.

## Funkcionális követelmények

- Van Regisztrációs, és log-in felület. Lehetőség van a felhasználói profil frissítésére, filmek feltöltésére, illetve azok kiválasztására.

## Rendszerre vonatkozó törvények, szabványok, ajánlások

- ASZF, GDPR

## Jelenlegi üzleti folyamatok modellje

- ?

## Igényelt üzleti folyamatok

- ?

## Követelmény Lista

| Modul | Id | Név | Verzió | Kifejtés
|--|--|--|--|--|
| Jogosultság | J1 | Log-in Felület | 1.0 |  A felhasználó az email címe és a jelszava segítségével bejelentkezhet. Ha a megadott email cím vagy jelszó nem megfelelő, akkor a felhasználó hibaüzenetet kap.
|Jogosultság|J2|Regisztráció|1.0| A felhasználó a felhasználói nevének, email címének és jelszavának és lakhelyének megadásával regisztrálja magát. A jelszó tárolása kódolva történik az adatbázisban. Ha valamelyik adat ezek közül hiányzik vagy nem felel meg a követelményeknek, akkor a rendszer értesíti erről a felhasználót.
| Jogosultság | J3 | Jogosultsági szintek | 1.0 | **Admin:** Rendszer hozzáférés, felhasználók/szerepkörök módosítása. **User:** Filmek feltöltése kiválasztása, személyes adatok módosítása.
| Modifikáció | M1 | Felhasználó módosítása | 1.0 | A felhasználó módosítani tudja a saját felhasználó nevét.
| Modifikáció | M2 | Jelszó Módosítás | 1.0 | A felhasználó módosítani tudja a saját jelszavát.
| Modifikáció | M3 | Kép Módosítás | 1.0 | A felhasználó módosítani tudja a saját profilképét.
| Funkció | F1 | Film Feltöltés | 1.0 | A felhasználó feltöltheti az általa kölcsönbe adni kívánt filmet, ehhez szükséges megadnia megjelenésének dátumát, címét, műfaját, időtartamát és rövid leírását.
| Felület | Fe1 | Felhasználói profil | 1.0 | Felhasználói adatokat lehet megtekinteni és módosítani.
| Felület | Fe2 | Kölcsönző felület | 1.0 | Kölcsönzésre elérhető filmeket lehet itt megtekinteni.



