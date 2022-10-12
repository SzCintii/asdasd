 | Teszteset               | Elvárt eredmény                                                                                                     | 
 |-------------------------|---------------------------------------------------------------------------------------------------------------------| 
 | Helytelen adat megadása | A művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak, hogy miért és milyen adatok megadásával történhet.|
 | Helyes adat megadása    | Megtörténik a művelet.                                                                                              | 
 

#### Ezeket a teszteseteket végrehajtani a legtöbb kombinációval

**Tesztelő:** Verebélyi Valentin

**Tesztelés dátuma:** 2022.október.12.

| Tesztszám | Rövid leírás                     | Várt eredmény                                                                   | Eredmény                                                                       | Megjegyzés                |
|-----------|----------------------------------|---------------------------------------------------------------------------------|--------------------------------------------------------------------------------|---------------------------|
| Teszt #01 | Helytelen adat bevitele a hossz mezőbe. | Művelet nem fog megvalósulni.  | Művelet nem fog megvalósulni. | Nem találtam problémát.   |
| Teszt #02 | Helytelen adat bevitele az év kiválasztásánál. | Művelet végre fog hajtódni.      | Művelet végrehajtódik.                                                         | Ennek a műveletnek nem kellene működnie, mivel bármilyen évszámot meglehet adni. Javítani kell a problémát.|
| Teszt #03 | Kevés karakter bevitele a cím mezőbe. | Művelet végre fog hajtódni. | Művelet végrehajtódik. | Nem találtam problémát. |
| Teszt #04 | Helytelen adat bevitele a hónap kiválasztásánál. |Művelet nem fog megvalósulni. | Művelet nem fog megvalósulni.| Alapértelmezetten nem lehet 1-nél kisebb és 12-nél nagyobb. |
| Teszt #05 | Helyes adatok bevitele a megfelelő mezőkbe. | Művelet végrehajtódik. | Művelet végrehajtódik. | Nem találtam problémát. |
| Teszt #06 | Helytelen adat bevitele a nap kiválasztásánál. | Művelet nem fog megvalósulni. | Művelet nem fog megvalósulni. | Alapértelmezetten nem lehet 1-nél kisebb és 31-nél nagyobb. |
| Teszt #07 | Csak a dátum mezőbe írunk helyes adatokat.| Művelet végrehajtódik. | Művelet végrehajtódik. | Javítani kell a problémát. |
