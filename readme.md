### file1
Nurodant kintamųjų tipus leidžia greičiau ir lengviau suprasti kodą, ir pamatyt kokį tipą gražina funkcija. 
Jeigu kintamieji greižtai apibrežti `declare(strict_types=1)`, padeda išvengti programavimo klaidų. 
Jeigu ne to tipo gražintas rezultatas iškart metama klaida. Todėl mažiau reikia validuoti duomenis.
Nurodant kintamųjų tipus programuotojas iškarto žino su kokiais duomenų tipais dirbama, nes programavimo įrankio patarėjas, jau iš anksto nusako kokius tipai reikalingi funkcijai.

### file2
2 faile ir be nurodytų tipų ir greižtai neapybrežti kintamieji. 
Šiek tiek trikdo programavimą, reikia laiko išsiaiškinti kokio tipo rezultatą gražins funkciją. Nežinoma su kokias duomenimis dirbama. 
Mano atveju gražina skaičių per kablelį, o tai gali bet kada įsivelti skaičiavimo klaidos.