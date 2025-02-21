<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $songs = [
            [
                'song_name'  => 'blue',
                'spotify_id' => '3be9ACTxtcL6Zm4vJRUiPG',
            ],
            [
                'song_name'  => 'Shed a Light',
                'spotify_id' => '1eyrmeiDpdTkOmA839nPVQ',
            ],
            [
                'song_name'  => 'That’s So True',
                'spotify_id' => '7ne4VBA60CxGM75vw0EYad',
            ],
            [
                'song_name'  => "I Love You, I'm Sorry",
                'spotify_id' => '51rfRCiUSvxXlCSCfIztBy',
            ],
            [
                'song_name'  => 'I Like Me Better',
                'spotify_id' => '4MagTPnkPiDuIa4P8GtW1b',
            ],
            [
                'song_name'  => 'Sailor Song',
                'spotify_id' => '2262bWmqomIaJXwCRHr13j',
            ],
            [
                'song_name'  => 'Every Summertime',
                'spotify_id' => '68HocO7fx9z0MgDU0ZPHro',
            ],
            [
                'song_name'  => 'Từng Quen',
                'spotify_id' => '3un8UkiPHJjlsrTHQnisXH',
            ],
            [
                'song_name'  => 'My Girl',
                'spotify_id' => '745H5CctFr12Mo7cqa1BMH',
            ],
            [
                'song_name'  => 'Put Your Records On',
                'spotify_id' => '2nGFzvICaeEWjIrBrL2RAx',
            ],
            [
                'song_name'  => 'Round and Around',
                'spotify_id' => '6QXdsoQ7yo0FaV6Velzgg4',
            ],
            [
                'song_name'  => 'WILDFLOWER',
                'spotify_id' => '3QaPy1KgI7nu9FJEQUgn6h',
            ],
            [
                'song_name'  => 'Nonsense',
                'spotify_id' => '6dgUya35uo964z7GZXM07g',
            ],
            [
                'song_name'  => 'That Should Be Me',
                'spotify_id' => '0aPZbnkMoWJaJ5CNVLCj8S',
            ],
            [
                'song_name'  => 'Those Eyes',
                'spotify_id' => '2psRActEWsTlYYd7EDoyVR',
            ],
            [
                'song_name'  => "Car's Outside",
                'spotify_id' => '0otRX6Z89qKkHkQ9OqJpKt',
            ],
            [
                'song_name'  => 'End of Beginning',
                'spotify_id' => '3qhlB30KknSejmIvZZLjOD',
            ],
            [
                'song_name'  => 'Beauty And A Beat',
                'spotify_id' => '6QFCMUUq1T2Vf5sFUXcuQ7',
            ],
            [
                'song_name'  => 'Cinnamon Girl',
                'spotify_id' => '2mdEsXPu8ZmkHRRtAdC09e',
            ],
            [
                'song_name'  => 'ceilings',
                'spotify_id' => '2L9N0zZnd37dwF0clgxMGI',
            ],
            [
                'song_name'  => 'Until I Found You (with Em Beihold) - Em Beihold Version',
                'spotify_id' => '18E1LAdiOj79wZqSOYMHE7',
            ],
            [
                'song_name'  => 'Young And Beautiful',
                'spotify_id' => '2nMeu6UenVvwUktBCpLMK9',
            ],
            [
                'song_name'  => 'Yellow',
                'spotify_id' => '3AJwUDP919kvQ9QcozQPxg',
            ],
            [
                'song_name'  => "CAN'T STOP THE FEELING! (from DreamWorks Animation's TROLLS)",
                'spotify_id' => '6JV2JOEocMgcZxYSZelKcc',
            ],
            [
                'song_name'  => 'Happy - From Despicable Me 2',
                'spotify_id' => '60nZcImufyMA1MKQY3dcCH',
            ],
            [
                'song_name'  => 'Unwritten',
                'spotify_id' => '3U5JVgI2x4rDyHGObzJfNf',
            ],
            [
                'song_name'  => '24K Magic',
                'spotify_id' => '6b8Be6ljOzmkOmFslEb23P',
            ],
            [
                'song_name'  => 'Sunroof',
                'spotify_id' => '6WHSNH8PhDHbpYxg4I181o',
            ],
            [
                'song_name'  => 'No Matter the Season',
                'spotify_id' => '0hdHIFiqtFuT2VrQ6S9gtX',
            ],
            [
                'song_name'  => 'Unsteady',
                'spotify_id' => '7lGKEWMXVWWTt3X71Bv44I',
            ],
            [
                'song_name'  => 'AUS23 (1:1)',
                'spotify_id' => '6aV6wReqMK8WswhL6KBY8U',
            ],
            [
                'song_name'  => 'Nuvole Bianche',
                'spotify_id' => '3weNRklVDqb4Rr5MhKBR3D',
            ],
            [
                'song_name'  => 'Una Mattina',
                'spotify_id' => '0Dkibk70FDp6t7eOZNemNQ',
            ],
            [
                'song_name'  => 'Experience',
                'spotify_id' => '1BncfTJAWxrsxyT9culBrj',
            ],
            [
                'song_name'  => 'MIA23 (1:2)',
                'spotify_id' => '2pkogCDf86ygBRuvpimLfk',
            ],
            [
                'song_name'  => 'Happiest Year',
                'spotify_id' => '219slQu3ALbTSAe9P22hvE',
            ],
            [
                'song_name'  => 'Picture You',
                'spotify_id' => '5KtvumPgVZmt8wg9xONE0T',
            ],
            [
                'song_name'  => 'Em Là',
                'spotify_id' => '6A1IbMKwjvXibcrU1sdqKH',
            ],
            [
                'song_name'  => 'tình yêu có nghĩa là gì?',
                'spotify_id' => '1Vla7vXcM0zimotYpresDT',
            ],
            [
                'song_name'  => 'Chúng Ta Của Hiện Tại',
                'spotify_id' => '1J3SmWwlYAG68LGKr86MVH',
            ],
            [
                'song_name'  => 'myssu',
                'spotify_id' => '4pV8KS6Ixmro0a7ssphtt7',
            ],
            [
                'song_name'  => 'coanhnoidokhong?',
                'spotify_id' => '7lxMFrrtUGowKDIIKiBucj',
            ],
            [
                'song_name'  => 'moon',
                'spotify_id' => '3uDagspd9LQOTwJd6jTWCM',
            ],
            [
                'song_name'  => 'LIMBO',
                'spotify_id' => '2bdVgAQgosGUJoViVDNeOV',
            ],
            [
                'song_name'  => 'UNDERSTAND',
                'spotify_id' => '72sfmdpuO5r8cBDgs7MqZZ',
            ],
            [
                'song_name'  => 'Titanium (feat. Sia)',
                'spotify_id' => '2i1AVZAYLhrQTvzr1hu7Jt',
            ],
            [
                'song_name'  => 'Sorry Not Sorry',
                'spotify_id' => '7gvd8xj4QgPqbQSsn5pV7d',
            ],
            [
                'song_name'  => 'good 4 u',
                'spotify_id' => '6PERP62TejQjgHu81OHxgM',
            ],
            [
                'song_name'  => 'Shout Out to My Ex',
                'spotify_id' => '1pwo8l3Ko7idwaz4LVUEC4',
            ],
            [
                'song_name'  => 'Bitch Better Have My Money',
                'spotify_id' => '0NTMtAO2BV4tnGvw9EgBVq',
            ],
            [
                'song_name'  => 'Same Old Love',
                'spotify_id' => '6ZANrVuAMp2rpjhfbOuJly',
            ],
            [
                'song_name'  => 'Bad Blood',
                'spotify_id' => '6xsEAm6w9oMQYYg3jkEkMT',
            ],
            [
                'song_name'  => 'I Kissed A Girl',
                'spotify_id' => '005lwxGU1tms6HGELIcUv9',
            ],
            [
                'song_name'  => 'brutal',
                'spotify_id' => '6SRsiMl7w1USE4mFqrOhHC',
            ],
            [
                'song_name'  => 'Яд',
                'spotify_id' => '59vIllaE2ottAAAtAiAuLt',
            ],
            [
                'song_name'  => 'Hà Nội (ft. VSTRA)',
                'spotify_id' => '0SLhB9JLM4Ksz1XdwK3aQD',
            ],
            [
                'song_name'  => 'Dead To Me',
                'spotify_id' => '6LOZws7T3jqZz78unPgFF9',
            ],
            [
                'song_name'  => 'Cayendo (Side A - Acoustic)',
                'spotify_id' => '72794Eag03xdy7TO0KNuid',
            ],
            [
                'song_name'  => 'Danza Kuduro',
                'spotify_id' => '2a1o6ZejUi8U3wzzOtCOYw',
            ],
            [
                'song_name'  => 'Gata Only',
                'spotify_id' => '6XjDF6nds4DE2BBbagZol6',
            ],
            [
                'song_name'  => 'Boyfriend',
                'spotify_id' => '1rKBOL9kJfX1Y4C3QaOvRH',
            ],
            [
                'song_name'  => 'Lonely',
                'spotify_id' => '4v7DCN09hgXkKazefkznDQ',
            ],
            [
                'song_name'  => 'Smack That',
                'spotify_id' => '2kQuhkFX7uSVepCD3h29g5',
            ],
            [
                'song_name'  => 'Thrift Shop (feat. Wanz)',
                'spotify_id' => '1CmUZGtH29Kx36C1Hleqlz',
            ],
            [
                'song_name'  => "Can't Hold Us (feat. Ray Dalton)",
                'spotify_id' => '3bidbhpOYeV4knp8AIu8Xn',
            ],
            [
                'song_name'  => 'Glorious (feat. Skylar Grey)',
                'spotify_id' => '0CokSRCu5hZgPxcZBaEzVE',
            ],
            [
                'song_name'  => 'These Days (feat. Jess Glynne, Macklemore & Dan Caplen)',
                'spotify_id' => '5CLGzJsGqhCEECcpnFQA8x',
            ],
            [
                'song_name'  => 'Wing$',
                'spotify_id' => '2mtB7ekPzvNoieI62jYeJD',
            ],
            [
                'song_name'  => 'Empire State Of Mind',
                'spotify_id' => '2igwFfvr1OAGX9SKDCPBwO',
            ],
            [
                'song_name'  => 'Homemade Dynamite - REMIX',
                'spotify_id' => '5u64RlrnvvbtNh6R0EMh6o',
            ],
            [
                'song_name'  => 'Electric (feat. Khalid)',
                'spotify_id' => '2mj7x99sNUsVHPBRK51zlG',
            ],
            [
                'song_name'  => 'lovely (with Khalid)',
                'spotify_id' => '0u2P5u6lvoDfwTYjAADbn4',
            ],
            [
                'song_name'  => 'Kids Again',
                'spotify_id' => '5LL9lSNn26GBoC5StQ3itk',
            ],
            [
                'song_name'  => 'New Light',
                'spotify_id' => '3bH4HzoZZFq8UpZmI2AMgV',
            ],
            [
                'song_name'  => 'Your Shirt',
                'spotify_id' => '6zdg9ovHEPx9EblJcc7FGf',
            ],
            [
                'song_name'  => 'Break My Heart Again',
                'spotify_id' => '7gGBgh0bVxHPgZjA505bo9',
            ],
            [
                'song_name'  => 'I keep on falling',
                'spotify_id' => '0OcZUN11NUGT3t5NfXwfaL',
            ],
            [
                'song_name'  => "It's All in Vain",
                'spotify_id' => '6a5xI87SEuxoeX6riFYEjM',
            ],
            [
                'song_name'  => 'Who (feat. BTS)',
                'spotify_id' => '2qG81jL9UIP54uS8gYyP4k',
            ],
            [
                'song_name'  => 'Reggaetón Lento (Remix)',
                'spotify_id' => '58gqyeFXhOttZW3yetJGPN',
            ],
            [
                'song_name'  => 'Sin Pijama',
                'spotify_id' => '2ijef6ni2amuunRoKTlgww',
            ],
            [
                'song_name'  => 'Calma - Remix',
                'spotify_id' => '5iwz1NiezX7WWjnCgY5TH4',
            ],
            [
                'song_name'  => 'Despacito - Remix',
                'spotify_id' => '6rPO02ozF3bM7NnOV4h6s2',
            ],
            [
                'song_name'  => 'Taki Taki (with Selena Gomez, Ozuna & Cardi B)',
                'spotify_id' => '4w8niZpiMy6qz1mntFA5uM',
            ],
            [
                'song_name'  => 'Señorita',
                'spotify_id' => '0TK2YIli7K1leLovkQiNik',
            ],
            [
                'song_name'  => 'Gasolina',
                'spotify_id' => '228BxWXUYQPJrJYHDLOHkj',
            ],
            [
                'song_name'  => 'BAND4BAND (feat. Lil Baby)',
                'spotify_id' => '7iabz12vAuVQYyekFIWJxD',
            ],
            [
                'song_name'  => 'El Perdón (with Enrique Iglesias)',
                'spotify_id' => '7qCAVkHWZkF44OzOUKf8Cr',
            ],
            [
                'song_name'  => 'Parado no Bailão',
                'spotify_id' => '3Hb9kUdm4yf839Fle4RIdT',
            ],
            [
                'song_name'  => 'Celoso',
                'spotify_id' => '33zcmmElV1YbRZe57biUjg',
            ],
            [
                'song_name'  => 'TELÉFONO - Remix',
                'spotify_id' => '5GYM4rUDvbT9ov3eS1YMll',
            ],
            [
                'song_name'  => 'Dicen',
                'spotify_id' => '4cfoVJxpHqUqTvBrG1RTyi',
            ],
            [
                'song_name'  => 'Downtown',
                'spotify_id' => '3Ga6eKrUFf12ouh9Yw3v2D',
            ],
            [
                'song_name'  => 'X (feat. Maluma & Ozuna) - Remix',
                'spotify_id' => '6JjPBQfI2Y8nIjnm65X6Pw',
            ],
            [
                'song_name'  => 'Mi Gente',
                'spotify_id' => '4ipnJyDU3Lq15qBAYNqlqK',
            ],
            [
                'song_name'  => 'Swalla (feat. Nicki Minaj & Ty Dolla $ign)',
                'spotify_id' => '6kex4EBAj0WHXDKZMEJaaF',
            ],
            [
                'song_name'  => 'BACK OF MY MIND',
                'spotify_id' => '2KICDTj8KkODjuit7v4AK6',
            ],
            [
                'song_name'  => 'BIRDS OF A FEATHER',
                'spotify_id' => '6dOtVTDdiauQNBQEDOtlAB',
            ],
            [
                'song_name'  => 'Romantic Homicide',
                'spotify_id' => '1xK59OXxi2TAAAbmZK0kBL',
            ],
            [
                'song_name'  => 'Here With Me',
                'spotify_id' => '5LrN7yUQAzvthd4QujgPFr',
            ],
            [
                'song_name'  => 'Sleep Well',
                'spotify_id' => '5ye1TParxcolbnNsOXO8qE',
            ],
            [
                'song_name'  => 'Iko Iko (My Bestie)',
                'spotify_id' => '7MC4XR9M9amdmKQr2iDF7i',
            ],
            [
                'song_name'  => 'Tek It',
                'spotify_id' => '63HHF9ZpCIisujKFk2rixR',
            ],
            [
                'song_name'  => 'Superhero',
                'spotify_id' => '1Fo4OvzP9PThFKMeMIAEYu',
            ],
            [
                'song_name'  => 'Silence',
                'spotify_id' => '6l0SEG60EHOxny0ZA4lxmO',
            ],
            [
                'song_name'  => 'Glimpse of Us',
                'spotify_id' => '6xGruZOHLs39ZbVccQTuPZ',
            ],
            [
                'song_name'  => "You're Gonna Live Forever in Me",
                'spotify_id' => '51lPx6ZCSalL2kvSrDUyJc',
            ],
            [
                'song_name'  => 'tonight',
                'spotify_id' => '0OrwGH9aeguhopTVubv0VZ',
            ],
            [
                'song_name'  => 'Seven (feat. Latto)',
                'spotify_id' => '7x9aauaA9cu6tyfpHnqDLo',
            ],
            [
                'song_name'  => 'Touch',
                'spotify_id' => '6aJn7Cst74cj4lNIiPRgav',
            ],
            [
                'song_name'  => 'POP!',
                'spotify_id' => '3lOMJTQTd6J34faYwASc33',
            ],
            [
                'song_name'  => 'Super Shy',
                'spotify_id' => '5sdQOyqq2IDhvmx2lHOpwd',
            ],
            [
                'song_name'  => 'Tiramisu Cake',
                'spotify_id' => '2LNe50dfsa7WaFa7LprfQg',
            ],
            [
                'song_name'  => 'Nonstop',
                'spotify_id' => '5joNJn9LUvYcamWwa2iYCL',
            ],
            [
                'song_name'  => 'Gee',
                'spotify_id' => '0t7kjpVLgOYITrSfFCoBEA',
            ],
            [
                'song_name'  => 'Some',
                'spotify_id' => '3jsYQw78lrxJA2ysnmOIf9',
            ],
            [
                'song_name'  => 'VERY NICE',
                'spotify_id' => '1Rrj7KyS2R6SP9CQMDJW1w',
            ],
            [
                'song_name'  => 'Psycho',
                'spotify_id' => '3CYH422oy1cZNoo0GTG1TK',
            ],
            [
                'song_name'  => 'Gashina',
                'spotify_id' => '0jFHMDRXxKaREor3hBEEST',
            ],
            [
                'song_name'  => 'Don’t Need Your Love',
                'spotify_id' => '7oEm5Q1virEUB9H0XjWZzF',
            ],
            [
                'song_name'  => 'ANL',
                'spotify_id' => '5W2Xm974d6afrssOV1FrtK',
            ],
            [
                'song_name'  => 'Echo',
                'spotify_id' => '2GCX7ibpjIsboADKGH4Cgs',
            ],
            [
                'song_name'  => "I'm Fine",
                'spotify_id' => '7HYJqAMbKDJYRyEfUGOCBB',
            ],
            [
                'song_name'  => "0X1=LOVESONG (I Know I Love You) feat. Seori",
                'spotify_id' => '1Z8TPHiKeCUyClxV6WTTIf',
            ],
            [
                'song_name'  => 'Blue Hour',
                'spotify_id' => '3ObPkJQAgjAhTwYvDhPrAW',
            ],
            [
                'song_name'  => 'Polaroid Love',
                'spotify_id' => '5elW2CKSoqjYoJ32AGDxf1',
            ],
            [
                'song_name'  => 'Spring Day',
                'spotify_id' => '2j1fFjWHCI9KJSwcuYAOyF',
            ],
            [
                'song_name'  => 'Fine',
                'spotify_id' => '6CdUgvL597jWmW4w8P5kHs',
            ],
            [
                'song_name'  => 'Stay With Me',
                'spotify_id' => '1HYzRuWjmS9LXCkdVHi25K',
            ],
            [
                'song_name'  => 'Spring Snow',
                'spotify_id' => '0tCr7DoUBSdtdSl0rxZmct',
            ],
            [
                'song_name'  => 'ONLY',
                'spotify_id' => '6TBJkXHPhu3EsMk1bshwuI',
            ],
            [
                'song_name'  => 'LOVE SCENARIO',
                'spotify_id' => '3d3ELsqKlQ7WA0a10Isu3l',
            ],
            [
                'song_name'  => 'Still With You',
                'spotify_id' => '0eFMbKCRw8KByXyWBw8WO7',
            ],
            [
                'song_name'  => 'DARARI',
                'spotify_id' => '0dcnrLo8s1rhjm8euGjI4n',
            ],
            [
                'song_name'  => 'bad',
                'spotify_id' => '6H67gFuycHyTOROX2M4bbs',
            ],
            [
                'song_name'  => 'love.',
                'spotify_id' => '5mtTAScDytxMMqZj14NmlN',
            ],
            [
                'song_name'  => 'seasons',
                'spotify_id' => '5VBjyOQzqlPNgdRPMM6prF',
            ],
            [
                'song_name'  => 'Try Again',
                'spotify_id' => '4Sav8RLaXMBpTZX6xNPj0K',
            ],
            [
                'song_name'  => 'Tip Toe',
                'spotify_id' => '0MJ5wKsPEeihONNfugHGy7',
            ],
            [
                'song_name'  => 'Take A Chance With Me',
                'spotify_id' => '21acb66djKRlDPJOXRBCkc',
            ],
            [
                'song_name'  => 'Pano',
                'spotify_id' => '5xes4vXHGTX4WFdX7A07Ka',
            ],
            [
                'song_name'  => 'No. 1 Party Anthem',
                'spotify_id' => '5TTGoX70AFrTvuEtqHK37S',
            ],
            [
                'song_name'  => 'Come Inside Of My Heart',
                'spotify_id' => '3Eb5sztvEMa0Mqnb8DUAlU',
            ],
            [
                'song_name'  => 'Always',
                'spotify_id' => '2LlOeW5rVcvl3QcPNPcDus',
            ],
            [
                'song_name'  => 'lowkey',
                'spotify_id' => '7ipqVwkp2MhZv0Ojzqy1NV',
            ],
            [
                'song_name'  => 'To the Bone',
                'spotify_id' => '3pCt2wRdBDa2kCisIdHWgF',
            ],
            [
                'song_name'  => 'Nothing',
                'spotify_id' => '1lORkxEMmsCZqhoxcmk3A3',
            ],
            [
                'song_name'  => 'Oceans & Engines',
                'spotify_id' => '0XZW4ZKXOwo9kCyDpXGNc7',
            ],
            [
                'song_name'  => 'Backburner',
                'spotify_id' => '4x2PkqSLtuwv53hLqq4GiY',
            ],
            [
                'song_name'  => 'I Love You 3000',
                'spotify_id' => '5xCsdnbeg7yhVX2qlRaDUw',
            ],
            [
                'song_name'  => 'comethru',
                'spotify_id' => '18uwL0vNUanqZH0ro2QcOP',
            ],
            [
                'song_name'  => 'pocket locket',
                'spotify_id' => '7t9d2YdmD87JC72pocMtlz',
            ],
            [
                'song_name'  => 'No Reason',
                'spotify_id' => '7uwJwSKpmzZH7p7imm4f1P',
            ],
            [
                'song_name'  => 'LDR',
                'spotify_id' => '6Hc5L8x8AbFkFwwqdTvfoj',
            ],
            [
                'song_name'  => '2002',
                'spotify_id' => '2BgEsaKNfHUdlh97KmvFyo',
            ],
            [
                'song_name'  => 'Way Back Home (feat. Conor Maynard) - Sam Feldt Edit',
                'spotify_id' => '1ZLrDPgR7mvuTco3rQK8Pk',
            ],
            [
                'song_name'  => 'Secret Love Song (feat. Jason Derulo)',
                'spotify_id' => '6KHL1En9v6iNWjcs44mcmU',
            ],
            [
                'song_name'  => 'Just the Way You Are',
                'spotify_id' => '7BqBn9nzAq8spo5e7cZ0dJ',
            ],
            [
                'song_name'  => 'Symphony (feat. Zara Larsson)',
                'spotify_id' => '72gv4zhNvRVdQA0eOenCal',
            ],
            [
                'song_name'  => 'Rewrite The Stars',
                'spotify_id' => '630sXRhIcfwr2e4RdNtjKN',
            ],
            [
                'song_name'  => 'In the Name of Love',
                'spotify_id' => '23L5CiUhw2jV1OIMwthR3S',
            ],
            [
                'song_name'  => 'Galway Girl',
                'spotify_id' => '0afhq8XCExXpqazXczTSve',
            ],
            [
                'song_name'  => 'Castle on the Hill',
                'spotify_id' => '6PCUP3dWmTjcTtXY02oFdT',
            ],
            [
                'song_name'  => 'Payphone',
                'spotify_id' => '1XGmzt0PVuFgQYYnV2It7A',
            ],
            [
                'song_name'  => 'Who Says',
                'spotify_id' => '3TcL0dyCMyr0kyTTc4NLgI',
            ],
            [
                'song_name'  => 'A Sky Full of Stars',
                'spotify_id' => '0FDzzruyVECATHXKHFs9eJ',
            ],
            [
                'song_name'  => "It Ain't Me (with Selena Gomez)",
                'spotify_id' => '3eR23VReFzcdmS7TYCrhCe',
            ],
            [
                'song_name'  => 'Without Me',
                'spotify_id' => '6FZDfxM3a3UCqtzo5pxSLZ',
            ],
            [
                'song_name'  => 'Domino',
                'spotify_id' => '2fQxE0jVrjNMT9oJAXtSJR',
            ],
            [
                'song_name'  => 'Shower',
                'spotify_id' => '3DmW6y7wTEYHJZlLo1r6XJ',
            ],
            [
                'song_name'  => 'Shut Up and Dance',
                'spotify_id' => '4kbj5MwxO1bq9wjT5g9HaA',
            ],
            [
                'song_name'  => 'Best Song Ever',
                'spotify_id' => '5T7ZFtCcOgkpjxcuaeZbw0',
            ],
            [
                'song_name'  => 'Count on Me',
                'spotify_id' => '7l1qvxWjxcKpB9PCtBuTbU',
            ],
            [
                'song_name'  => 'Classic',
                'spotify_id' => '6FE2iI43OZnszFLuLtvvmg',
            ],
            [
                'song_name'  => 'Party In The U.S.A.',
                'spotify_id' => '3E7dfMvvCLUddWissuqMwr',
            ],
            [
                'song_name'  => 'Hey, Soul Sister',
                'spotify_id' => '4HlFJV71xXKIGcU3kRyttv',
            ],
            [
                'song_name'  => 'A Million Dreams',
                'spotify_id' => '0RoA7ObU6phWpqhlC9zH4Z',
            ],
            [
                'song_name'  => 'Let Me Love You',
                'spotify_id' => '0lYBSQXN6rCTvUZvg9S0lU',
            ],
            [
                'song_name'  => 'Call Me Maybe',
                'spotify_id' => '20I6sIOMTCkB6w7ryavxtO',
            ],
            [
                'song_name'  => 'A Thousand Miles',
                'spotify_id' => '4w1lzcaoZ1IC2K5TwjalRP',
            ],
            [
                'song_name'  => 'THOUSAND MILES',
                'spotify_id' => '1r8ZCjfrQxoy2wVaBUbpwg',
            ],
            [
                'song_name'  => 'NIGHTS LIKE THIS',
                'spotify_id' => '1XBYiRV30ykHw5f4wm6qEn',
            ],
            [
                'song_name'  => 'STAY (with Justin Bieber)',
                'spotify_id' => '567e29TDzLwZwfDuEpGTwo',
            ],
            [
                'song_name'  => 'One Day',
                'spotify_id' => '4Ey0LK1HzksUqm9JLzzKuD',
            ],
            [
                'song_name'  => '10:35',
                'spotify_id' => '6BePGk3eCan4FqaW2X8Qy3',
            ],
            [
                'song_name'  => 'Move (feat. Camila Cabello & Malachiii)',
                'spotify_id' => '0scd3nh27AYTNXo0KHRmsG',
            ],
            [
                'song_name'  => 'Moves Like Jagger',
                'spotify_id' => '1r299qCKBLgUS9XJ9m1kEx',
            ],
            [
                'song_name'  => 'Too Sweet',
                'spotify_id' => '3HMY0r2BAdpasXMY8rseR0',
            ],
            [
                'song_name'  => 'YMCA',
                'spotify_id' => '3ypMsqUwfNFMiooMLVHfkp',
            ],
            [
                'song_name'  => 'Dancing Queen',
                'spotify_id' => '0GjEhVFGZW8afUYGChu3Rr',
            ],
            [
                'song_name'  => 'Gimme! Gimme! Gimme! (A Man After Midnight)',
                'spotify_id' => '3vkQ5DAB1qQMYO4Mr9zJN6',
            ],
            [
                'song_name'  => 'I Want It That Way',
                'spotify_id' => '47BBI51FKFwOMlIiX6m8ya',
            ],
            [
                'song_name'  => 'Take on Me',
                'spotify_id' => '2WfaOiMkCvy7F5fcp2zZ8L',
            ],
            [
                'song_name'  => 'Stand By Me',
                'spotify_id' => '3SdTKo2uVsxFblQjpScoHy',
            ],
            [
                'song_name'  => 'Put Your Head On My Shoulder',
                'spotify_id' => '2DpJ9T2RVRanZcYFHKOAfA',
            ],
            [
                'song_name'  => "Ain't No Mountain High Enough",
                'spotify_id' => '7tqhbajSfrz2F7E1Z75ASX',
            ],
            [
                'song_name'  => "Stayin' Alive",
                'spotify_id' => '4UDmDIqJIbrW0hMBQMFOsM',
            ],
            [
                'song_name'  => 'Careless Whisper',
                'spotify_id' => '4jDmJ51x1o9NZB5Nxxc7gY',
            ],
            [
                'song_name'  => "Somebody's Watching Me",
                'spotify_id' => '7jwQlYGpOml9ETGre1HqGA',
            ],
            [
                'song_name'  => 'Tennessee Whiskey',
                'spotify_id' => '3fqwjXwUGN6vbzIwvyFMhx',
            ],
            [
                'song_name'  => 'Take Me Home, Country Roads - Original Version',
                'spotify_id' => '1YYhDizHx7PnDhAhko6cDS',
            ],
            [
                'song_name'  => 'Tadow',
                'spotify_id' => '51rPRW8NjxZoWPPjnRGzHw',
            ],
            [
                'song_name'  => 'Smooth Operator - Single Version',
                'spotify_id' => '1Hv1VTm8zeOeybub15mA2R',
            ],
            [
                'song_name'  => 'Back To Black',
                'spotify_id' => '3FAclTFfvUuQYnEsptbK8w',
            ],
            [
                'song_name'  => 'La Vie en rose',
                'spotify_id' => '3lAun9V0YdTlCSIEXPvfsY',
            ],
            [
                'song_name'  => 'Love Story',
                'spotify_id' => '6nGeLlakfzlBcFdZXteDq7',
            ],
            [
                'song_name'  => "C'est La Vie",
                'spotify_id' => '5iqrbO0fhuLMiy9tYGanv6',
            ],
            [
                'song_name'  => 'Les Champs-Elysées',
                'spotify_id' => '4dPITmujWbI8ibU1QVidCE',
            ],
            [
                'song_name'  => 'Non non non (Ecouter Barbara)',
                'spotify_id' => '6M6jVoM0ULQ2P12iQg1BOc',
            ],
            [
                'song_name'  => "'O sole mio",
                'spotify_id' => '4uZZbljn9P4ZiPdxCuQaIL',
            ],
            [
                'song_name'  => 'Mystery of Love',
                'spotify_id' => '0MNNKSUU9OOQ8DSGWduw79',
            ],
            [
                'song_name'  => 'Beautiful Boy (Darling Boy) - Remastered 2010',
                'spotify_id' => '5URfZHMlUWTWxPvvSBWcPk',
            ],
            [
                'song_name'  => 'More Than A Woman',
                'spotify_id' => '2cX2coZS1PYBfPs8wgbdWE',
            ],
            [
                'song_name'  => 'Slipping Through My Fingers',
                'spotify_id' => '6TvxPS4fj4LUdjw2es4g21',
            ],
            [
                'song_name'  => 'Space Song',
                'spotify_id' => '7H0ya83CMmgFcOhw0UB6ow',
            ],
            [
                'song_name'  => 'Apocalypse',
                'spotify_id' => '3AVrVz5rK8Hrqo9YGiVGN5',
            ],
            [
                'song_name'  => 'Everybody Wants To Rule The World',
                'spotify_id' => '4RvWPyQ5RL0ao9LPZeSouE',
            ],
            [
                'song_name'  => 'Les',
                'spotify_id' => '0mCVNGC4Vvb6gDDQrDpaRh',
            ],
            [
                'song_name'  => 'Lovers Rock',
                'spotify_id' => '6dBUzqjtbnIa1TwYbyw5CM',
            ],
            [
                'song_name'  => 'SLOW DANCING IN THE DARK',
                'spotify_id' => '0rKtyWc8bvkriBthvHKY8d',
            ],
            [
                'song_name'  => 'Me Gustas Tu',
                'spotify_id' => '6b37xrsNCWYIUphFBazqD6',
            ],
            [
                'song_name'  => 'Con Te Partirò',
                'spotify_id' => '7zrpoAJte9o12TzawqgdD0',
            ],
            [
                'song_name'  => 'La La Latch (Sam Smith/Disclosure/Naughty Boy Mashup)',
                'spotify_id' => '6fOqEAXCwboCO4BdzbZG1K',
            ],
            [
                'song_name'  => 'Hallelujah',
                'spotify_id' => '550rQQCGkrTzvp4SfpOPzx',
            ],
            [
                'song_name'  => 'Mary, Did You Know?',
                'spotify_id' => '4z8sz6E4YyFuEkv5o7IJni',
            ],
            [
                'song_name'  => 'Daft Punk',
                'spotify_id' => '6ukvsBzq4d1vBsAUmz7ZVt',
            ],
            [
                'song_name'  => 'Oceans (Where Feet May Fail)',
                'spotify_id' => '5SDcksP8En1l6RtTY1wzHc',
            ],
            [
                'song_name'  => 'All I Want for Christmas Is You',
                'spotify_id' => '0bYg9bo50gSsH3LtXe2SQn',
            ],
            [
                'song_name'  => 'Last Christmas',
                'spotify_id' => '2FRnf9qhLbvw8fu4IBXx78',
            ],
            [
                'song_name'  => "Rockin' Around The Christmas Tree",
                'spotify_id' => '2EjXfH91m7f8HiJN1yQg97',
            ],
            [
                'song_name'  => 'Santa Tell Me',
                'spotify_id' => '0lizgQ7Qw35od7CYaoMBZb',
            ],
            [
                'song_name'  => 'Winter Wonderland - Spotify Singles Holiday',
                'spotify_id' => '1LmkdWSxjCV7wKTPsCvYWN',
            ],
            [
                'song_name'  => 'Holly Jolly Christmas',
                'spotify_id' => '5PuKlCjfEVIXl0ZBp5ZW9g',
            ],
            [
                'song_name'  => 'Underneath the Tree',
                'spotify_id' => '3nAp4IvdMPPWEH9uuXFFV5',
            ],
            [
                'song_name'  => 'A Nonsense Christmas',
                'spotify_id' => '73ye7F9Ub51dQ3CrnCHFhr',
            ],
            [
                'song_name'  => 'My Heart Will Go On - Love Theme from Titanic',
                'spotify_id' => '33LC84JgLvK2KuW43MfaNq',
            ],
            [
                'song_name'  => "It's All Coming Back to Me Now",
                'spotify_id' => '5EQzuYfTZt7B2LqlvTF49l',
            ],
            [
                'song_name'  => 'Because You Loved Me (Theme from Up Close and Personal)',
                'spotify_id' => '28UMiBhn383n9S7GL4tsxD',
            ],
            [
                'song_name'  => 'Hotel California - 2013 Remaster',
                'spotify_id' => '40riOy7x9W7GXjyGp4pjAv',
            ],
            [
                'song_name'  => '彩虹',
                'spotify_id' => '5pLarojy3gy2T4hPnm8lQh',
            ],
            [
                'song_name'  => 'Carry You Home',
                'spotify_id' => '5o0osRx8kYJTOqlOSggr9Z',
            ],
            [
                'song_name'  => "Stronger (What Doesn't Kill You)",
                'spotify_id' => '1nInOsHbtotAmEOQhtvnzP',
            ],
            [
                'song_name'  => 'Never Enough',
                'spotify_id' => '0Gl5s8IhMmQE5YQwM8Qx1J',
            ],
            [
                'song_name'  => 'Fix You',
                'spotify_id' => '7LVHVU3tWfcxj5aiPFEW4Q',
            ],
            [
                'song_name'  => "Don't Give Up On Me",
                'spotify_id' => '0fiijtFXDJ9MOVwgSaEQJ5',
            ],
            [
                'song_name'  => "Better When I'm Dancin'",
                'spotify_id' => '5k5fWendNngd89O8JKoE8L',
            ],
            [
                'song_name'  => 'Belong Together',
                'spotify_id' => '0rtDE9zfXbamTlRUSwY7zy',
            ],
            [
                'song_name'  => 'When We Were Young',
                'spotify_id' => '6O5TrlFWTYvznd9fMC0VvU',
            ],
            [
                'song_name'  => 'Just Give Me a Reason (feat. Nate Ruess)',
                'spotify_id' => '1mKXFLRA179hdOWQBwUk9e',
            ],
            [
                'song_name'  => 'Dancing On My Own',
                'spotify_id' => '2BOqDYLOJBiMOXShCV1neZ',
            ],
            [
                'song_name'  => 'Before You Go',
                'spotify_id' => '2gMXnyrvIjhVBUZwvLZDMP',
            ],
            [
                'song_name'  => 'If the World Was Ending (feat. Julia Michaels)',
                'spotify_id' => '4bp5G6x1SXMQW4X9DbCCCp',
            ],
            [
                'song_name'  => 'The Scientist',
                'spotify_id' => '75JFxkI2RXiU7L9VXzMkle',
            ],
            [
                'song_name'  => 'Hold On',
                'spotify_id' => '5vjLSffimiIP26QG5WcN2K',
            ],
            [
                'song_name'  => 'Lose You To Love Me',
                'spotify_id' => '4l0Mvzj72xxOpRrp6h8nHi',
            ],
            [
                'song_name'  => 'What A Time (feat. Niall Horan)',
                'spotify_id' => '5WtfUKzXircvW8l5aaVZWT',
            ],
            [
                'song_name'  => 'All I Want',
                'spotify_id' => '0NlGoUyOJSuSHmngoibVAs',
            ],
            [
                'song_name'  => 'Breakeven',
                'spotify_id' => '285hMzLhJwHVLe9QT9qilk',
            ],
            [
                'song_name'  => 'Hold Me While You Wait',
                'spotify_id' => '60iSKGrGazRzICtMjADNSM',
            ],
            [
                'song_name'  => 'drivers license',
                'spotify_id' => '5wANPM4fQCJwkGd4rN57mH',
            ],
            [
                'song_name'  => 'July',
                'spotify_id' => '6J2LdBN97cDWn0MLxYh9HB',
            ],
            [
                'song_name'  => 'Bruises',
                'spotify_id' => '4Of7rzpRpV1mWRbhp5rAqK',
            ],
            [
                'song_name'  => 'Falling Like The Stars',
                'spotify_id' => '395KzBy0bkb57dEvg6cfzJ',
            ],
            [
                'song_name'  => 'Fire On Fire',
                'spotify_id' => '7t3Xdbufg7q2onVsR8RBdY',
            ],
            [
                'song_name'  => 'Someone You Loved',
                'spotify_id' => '7qEHsqek33rTcFNT9PFqLf',
            ],
            [
                'song_name'  => 'you broke me first',
                'spotify_id' => '4l0RmWt52FxpVxMNni6i63',
            ],
            [
                'song_name'  => 'In My Blood',
                'spotify_id' => '2QZ7WLBE8h2y1Y5Fb8RYbH',
            ],
            [
                'song_name'  => 'Ho Hey',
                'spotify_id' => '0DwClY2t9YAWHBROMIgrXb',
            ],
            [
                'song_name'  => "i hate u, i love u (feat. olivia o'brien)",
                'spotify_id' => '7vRriwrloYVaoAe3a9wJHe',
            ],
            [
                'song_name'  => 'Skinny Love',
                'spotify_id' => '4RL77hMWUq35NYnPLXBpih',
            ],
            [
                'song_name'  => 'This City',
                'spotify_id' => '5oJmBs9L5xwDkUbDWqn6Wr',
            ],
            [
                'song_name'  => "It's You",
                'spotify_id' => '5DqdesEfbRyOlSS3Tf6c29',
            ],
            [
                'song_name'  => "when the party's over",
                'spotify_id' => '43zdsphuZLzwA9k4DJhU0I',
            ],
            [
                'song_name'  => 'that way',
                'spotify_id' => '7l97ElWmIdVHWUaOeeU5ZC',
            ],
            [
                'song_name'  => 'Little Do You Know',
                'spotify_id' => '1almCHdsfikRPfVB9VrEdT',
            ],
            [
                'song_name'  => 'If We Have Each Other',
                'spotify_id' => '7pT6WSg4PCt4mr5ZFyUfsF',
            ],
            [
                'song_name'  => 'Train Wreck',
                'spotify_id' => '55Am8neGJkdj2ADaM3aw5H',
            ],
            [
                'song_name'  => 'Say Something',
                'spotify_id' => '5TvE3pk05pyFIGdSY9j4DJ',
            ],
            [
                'song_name'  => 'Remember That Night?',
                'spotify_id' => '1nYzjrdVQ8RpF93M0jPFW7',
            ],
            [
                'song_name'  => 'Eastside (with Halsey & Khalid)',
                'spotify_id' => '7FGq80cy8juXBCD2nrqdWU',
            ],
            [
                'song_name'  => 'you were good to me',
                'spotify_id' => '4CxFN5zON70B3VOPBYbd6P',
            ],
            [
                'song_name'  => 'IDK You Yet',
                'spotify_id' => '0j1Ia2lQWrcXrQZI4AdJlk',
            ],
            [
                'song_name'  => "I Think I'm In Love",
                'spotify_id' => '3U1TuSqHIubBA10cVP7Sk6',
            ],
            [
                'song_name'  => 'Let Me Down Slowly',
                'spotify_id' => '2qxmye6gAegTMjLKEBoR3d',
            ],
            [
                'song_name'  => 'Water Fountain',
                'spotify_id' => '4IhKLu7Vk3j2TLmnFPl6To',
            ],
            [
                'song_name'  => 'Love Is Gone - Acoustic',
                'spotify_id' => '7F1CiKqrY44kh5cDqwHOnx',
            ],
            [
                'song_name'  => 'Ghost Town',
                'spotify_id' => '6HuHyXviAdpmnQu73JHfBz',
            ],
            [
                'song_name'  => 'favorite crime',
                'spotify_id' => '5JCoSi02qi3jJeHdZXMmR8',
            ],
            [
                'song_name'  => 'all the kids are depressed',
                'spotify_id' => '75ls0gurX68lUmMjE7QcsE',
            ],
            [
                'song_name'  => 'Arcade',
                'spotify_id' => '1J14CdDAvBTE1AJYUOwl6C',
            ],
            [
                'song_name'  => 'Lost Boy',
                'spotify_id' => '0zMzyHAeMvwq5CRstru1Fp',
            ],
            [
                'song_name'  => 'Imagination',
                'spotify_id' => '21TcDbGosp7w9YhTjOszgA',
            ],
            [
                'song_name'  => 'Perfect',
                'spotify_id' => '0tgVpDi06FyKpA1z0VMD4v',
            ],
            [
                'song_name'  => 'Make You Mine',
                'spotify_id' => '5iFwAOB2TFkPJk8sMlxP8g',
            ],
            [
                'song_name'  => 'Bored',
                'spotify_id' => '04sN26COy28wTXYj3dMoiZ',
            ],
            [
                'song_name'  => 'Maniac',
                'spotify_id' => '6KfoDhO4XUWSbnyKjNp9c4',
            ],
            [
                'song_name'  => 'Love Someone',
                'spotify_id' => '0OCRwXbQRdOZ1OtB4Imsp1',
            ],
            [
                'song_name'  => 'Only Love Can Hurt Like This',
                'spotify_id' => '62ke5zFUJN6RvtXZgVH0F8',
            ],
            [
                'song_name'  => "Like I'm Gonna Lose You (feat. John Legend)",
                'spotify_id' => '2YlZnw2ikdb837oKMKjBkW',
            ],
            [
                'song_name'  => 'Youngblood',
                'spotify_id' => '2iUXsYOEPhVqEBwsqP70rE',
            ],
            [
                'song_name'  => 'PILLOWTALK',
                'spotify_id' => '0PDUDa38GO8lMxLCRc4lL1',
            ],
            [
                'song_name'  => 'Sign of the Times',
                'spotify_id' => '5Ohxk2dO5COHF1krpoPigN',
            ],
            [
                'song_name'  => 'Electric Love',
                'spotify_id' => '2GiJYvgVaD2HtM8GqD9EgQ',
            ],
            [
                'song_name'  => "All Too Well (Taylor's Version)",
                'spotify_id' => '3nsfB1vus2qaloUdcBZvDu',
            ],
            [
                'song_name'  => 'die first',
                'spotify_id' => '3TfDUStpnEVIlsNlgcKQgJ',
            ],
            [
                'song_name'  => 'PUSH 2 START',
                'spotify_id' => '1Cbl3Yq8rHo7hhDQmLQagU',
            ],
            [
                'song_name'  => 'Messy',
                'spotify_id' => '35ISBknsCeZQtq66xABI9g',
            ],
            [
                'song_name'  => 'Diet Pepsi',
                'spotify_id' => '6MzofobZt2dm0Kf1hTThFz',
            ],
            [
                'song_name'  => 'No One Noticed',
                'spotify_id' => '3siwsiaEoU4Kuuc9WKMUy5',
            ],
            [
                'song_name'  => 'Good Luck, Babe!',
                'spotify_id' => '0WbMK4wrZ1wFSty9F7FCgu',
            ],
            [
                'song_name'  => 'luther (with sza)',
                'spotify_id' => '2CGNAOSuO1MEFCbBRgUzjd',
            ],
            [
                'song_name'  => 'Angel Baby',
                'spotify_id' => '3wlLknnMtD8yZ0pCtCeeK4',
            ],
            [
                'song_name'  => 'double take',
                'spotify_id' => '0QzuaeCEEOV40Pn7IvKEny',
            ],
            [
                'song_name'  => 'moonlight',
                'spotify_id' => '2Qn6WHJrY5Im82Jux8FboH',
            ],
            [
                'song_name'  => 'About You',
                'spotify_id' => '1fDFHXcykq4iw8Gg7s5hG9',
            ],
            [
                'song_name'  => 'Always Remember Us This Way',
                'spotify_id' => '2rbDhOo9Fh61Bbu23T2qCk',
            ],
            [
                'song_name'  => 'Always Forever',
                'spotify_id' => '2enPRFda84VE2wtI8c86Uf',
            ],
            [
                'song_name'  => "always, i'll care",
                'spotify_id' => '0rbKrBvZUYY9GN9l057BuY',
            ],
            [
                'song_name'  => 'always, forever',
                'spotify_id' => '6Jiexl2A8SVCdjudK9LwNC',
            ],
            [
                'song_name'  => 'Always',
                'spotify_id' => '1FCQLXqwkKiqXNVAos5j2B',
            ],
            [
                'song_name'  => 'Lovers in the Night',
                'spotify_id' => '3JtVOqRMgfMNDL7r2NFkYz',
            ],
            [
                'song_name'  => 'Dive with you (feat. eaJ)',
                'spotify_id' => '5KlXKygDyS1CS8ToYA1iHZ',
            ],
            [
                'song_name'  => 'Running Through The Night',
                'spotify_id' => '3UZ46DvXvB2R7sBUZornlv',
            ],
            [
                'song_name'  => 'Sempurna',
                'spotify_id' => '2UgCs0i0rNHUH2jKE5NZHE',
            ],
            [
                'song_name'  => 'Kau Adalah (feat. Rayi Putra)',
                'spotify_id' => '2WoRw2nWZoj5ty0rOQP4FQ',
            ],
            [
                'song_name'  => 'Gajah',
                'spotify_id' => '7vZTvo2aJ6wHKCGjwjdWIf',
            ],
            [
                'song_name'  => 'Dari Mata',
                'spotify_id' => '4xFM9ET7fPtYgbp9QyzrHl',
            ],
            [
                'song_name'  => 'Hati-Hati di Jalan',
                'spotify_id' => '2hHeGD57S0BcopfVcmehdl',
            ],
            [
                'song_name'  => 'Takut',
                'spotify_id' => '1qHddOZ7pwtmOsw0RmlKFx',
            ],
            [
                'song_name'  => 'Lantas',
                'spotify_id' => '1ZPVEo8RfmrEz8YAD5n6rW',
            ],
            [
                'song_name'  => 'Akhir Tak Bahagia',
                'spotify_id' => '0BYoWATcndOBcsCfKdTKRx',
            ],
            [
                'song_name'  => 'Monokrom',
                'spotify_id' => '4GfK1qOF3uBWidbPlTCQRL',
            ],
            [
                'song_name'  => 'Pamit',
                'spotify_id' => '3B4VP6swG49n3scg2aMfA6',
            ],
            [
                'song_name'  => 'Teman Bahagia',
                'spotify_id' => '6zf7JLkN833dKAfw7Lth9e',
            ],
            [
                'song_name'  => 'I Still Love You',
                'spotify_id' => '4reIsHKw5hUj4pV8zzMjLA',
            ],
            [
                'song_name'  => 'Sayap Pelindungmu',
                'spotify_id' => '3LhUsgwtftfxHIPgViaYxB',
            ],
            [
                'song_name'  => 'Sparkle Kimi no Na Wa Your Name',
                'spotify_id' => '1lPcZ6aV6X9zGRlVrEXPY0',
            ],
            [
                'song_name'  => 'Mayonaka no Door / Stay With Me',
                'spotify_id' => '2BHj31ufdEqVK5CkYDp9mA',
            ],
            [
                'song_name'  => '夜に駆ける',
                'spotify_id' => '6MCjmGYlw6mQVWRFVgBRvB',
            ],
            [
                'song_name'  => 'Shinunoga E-Wa',
                'spotify_id' => '0o9zmvc5f3EFApU52PPIyW',
            ],
            [
                'song_name'  => 'Sparkle - Movie Version',
                'spotify_id' => '0b4a1iklB8w8gsE38nzyEx',
            ],
            [
                'song_name'  => 'Shelter',
                'spotify_id' => '2ewEh7LuvToYyGHq7yT8N1',
            ],
            [
                'song_name'  => 'Seve - Radio Edit',
                'spotify_id' => '6UqRGwjwYL0stXbaodTxwo',
            ],
            [
                'song_name'  => "don't forget to breathe today",
                'spotify_id' => '77np1SVSEMiQ5eaGDXWjkp',
            ],
            [
                'song_name'  => 'Forever',
                'spotify_id' => '6potEImiklXkwD9qFzpu15',
            ],
            [
                'song_name'  => 'lift me from the ground',
                'spotify_id' => '7snnEDYwv30hRtmifVni8P',
            ],
            [
                'song_name'  => 'Heartburn - Felix Cartal Remix',
                'spotify_id' => '1Gh5eDGsdR5QHsdhteApNP',
            ],
            [
                'song_name'  => 'Fragile',
                'spotify_id' => '0L6UCE1Y0KX3MF2AtxlntI',
            ],
            [
                'song_name'  => 'Temple',
                'spotify_id' => '3DJFMxbbiUUfqjwNJJ548y',
            ],
            [
                'song_name'  => 'L.A. Love Song',
                'spotify_id' => '5OW1KzgpaEWAtXck8MMX8f',
            ],
            [
                'song_name'  => 'perfume',
                'spotify_id' => '1kvkYrjZh561EJwERr8EsK',
            ],
            [
                'song_name'  => 'Starlight (Keep Me Afloat)',
                'spotify_id' => '4UQy41kC5LjzwQuiuWOpwA',
            ],
            [
                'song_name'  => 'Woman',
                'spotify_id' => '6Uj1ctrBOjOas8xZXGqKk4',
            ],
            [
                'song_name'  => 'Kiss Me More (feat. SZA)',
                'spotify_id' => '3DarAbFujv6eYNliUTyqtz',
            ],
            [
                'song_name'  => 'Sorry',
                'spotify_id' => '0JBq4P9Jpp37F1PteCgGL1',
            ],
            [
                'song_name'  => "Don't You Worry Child - Radio Edit",
                'spotify_id' => '2V65y3PX4DkRhy1djlxd9p',
            ],
            [
                'song_name'  => 'Time of Our Lives',
                'spotify_id' => '2bJvI42r8EF3wxjOuDav4r',
            ],
            [
                'song_name'  => 'Fireflies',
                'spotify_id' => '3DamFFqW32WihKkTVlwTYQ',
            ],
            [
                'song_name'  => 'Truth or Dare',
                'spotify_id' => '7axl6v0Yv4ksLVMt6XItpc',
            ],
            [
                'song_name'  => 'Habibi - Albanian Remix',
                'spotify_id' => '2sHYMLUd4nVLxHPKY05Ein',
            ],
            [
                'song_name'  => 'Chammak Challo',
                'spotify_id' => '0EH7sgeiFqDa3eS7ieW2zs',
            ],
            [
                'song_name'  => 'Boom Clap',
                'spotify_id' => '094RugjgLW6CdPLOJctBZ3',
            ],
            [
                'song_name'  => 'Something Just Like This',
                'spotify_id' => '1dNIEtp7AY3oDAKCGg2XkH',
            ],
            [
                'song_name'  => "Hips Don't Lie (feat. Wyclef Jean)",
                'spotify_id' => '3ZFTkvIE7kyPt6Nu3PEa7V',
            ],
            [
                'song_name'  => 'Dynamite',
                'spotify_id' => '2CEgGE6aESpnmtfiZwYlbV',
            ],
            [
                'song_name'  => '美丽的神话',
                'spotify_id' => '4LNCkaCUxJ02q0ijvl4w1H',
            ],
            [
                'song_name'  => 'Enchanted',
                'spotify_id' => '3sqrvkNC6IPTIXvvbx9Arw',
            ],
            [
                'song_name'  => 'Never Be the Same',
                'spotify_id' => '4eWQlBRaTjPPUlzacqEeoQ',
            ],
            [
                'song_name'  => 'Falling',
                'spotify_id' => '1ZMiCix7XSAbfAJlEZWMCp',
            ],
            [
                'song_name'  => 'Heather',
                'spotify_id' => '4xqrdfXkTW4T0RauPLv3WA',
            ],
            [
                'song_name'  => 'traitor',
                'spotify_id' => '5CZ40GBx1sQ9agT82CLQCT',
            ],
            [
                'song_name'  => 'Heart Attack',
                'spotify_id' => '1V6gIisPpYqgFeWbMLI0bA',
            ],
            [
                'song_name'  => 'You & I',
                'spotify_id' => '2afCBiru10AFckfOa49wIa',
            ],
            [
                'song_name'  => 'a thousand years',
                'spotify_id' => '6lanRgr6wXibZr8KgzXxBl',
            ],
            [
                'song_name'  => 'Scars To Your Beautiful',
                'spotify_id' => '0wI7QkCcs8FUQE1OkXUIqd',
            ],
            [
                'song_name'  => 'Lover',
                'spotify_id' => '1dGr1c8CrMLDpV6mPbImSI',
            ],
            [
                'song_name'  => 'Style',
                'spotify_id' => '0ug5NqcwcFR2xrfTkc7k8e',
            ],
            [
                'song_name'  => 'In The Stars',
                'spotify_id' => '315aBOUD3xtj7sUMXtRgMV',
            ],
            [
                'song_name'  => "There's Nothing Holdin' Me Back",
                'spotify_id' => '7JJmb5XwzOO8jgpou264Ml',
            ],
            [
                'song_name'  => 'Mercy',
                'spotify_id' => '0AS63m1wHv9n4VVRizK6Hc',
            ],
            [
                'song_name'  => 'Stitches',
                'spotify_id' => '5jsw9uXEGuKyJzs0boZ1bT',
            ],
            [
                'song_name'  => 'deja vu',
                'spotify_id' => '6HU7h9RYOaPRFeh0R3UeAr',
            ],
            [
                'song_name'  => "We Don't Talk Anymore (feat. Selena Gomez)",
                'spotify_id' => '54PbBpquVfhfrwRwvjSXbI',
            ],
            [
                'song_name'  => 'Happier',
                'spotify_id' => '2RttW7RAu5nOAfq6YFvApB',
            ],
            [
                'song_name'  => 'Grenade',
                'spotify_id' => '4lLtanYk6tkMvooU0tWzG8',
            ],
            [
                'song_name'  => 'Marry You',
                'spotify_id' => '6SKwQghsR8AISlxhcwyA9R',
            ],
            [
                'song_name'  => 'Ghost',
                'spotify_id' => '6I3mqTwhRpn34SLVafSH7G',
            ],
            [
                'song_name'  => 'All of Me',
                'spotify_id' => '3U4isOIWM3VvDubwSI3y7a',
            ],
            [
                'song_name'  => 'Dusk Till Dawn (feat. Sia) - Radio Edit',
                'spotify_id' => '3e7sxremeOE3wTySiOhGiP',
            ],
            [
                'song_name'  => 'cardigan',
                'spotify_id' => '4R2kfaDFhslZEMJqAFNpdd',
            ],
            [
                'song_name'  => 'Atlantis',
                'spotify_id' => '1Fid2jjqsHViMX6xNH70hE',
            ],
            [
                'song_name'  => 'Dancing With Your Ghost',
                'spotify_id' => '1TQXIltqoZ5XXyfCbAeSQQ',
            ],
            [
                'song_name'  => 'Solo (feat. Demi Lovato)',
                'spotify_id' => '3NuK5xMlSlB6K2Qp16zf3h',
            ],
            [
                'song_name'  => 'Jackie Chan',
                'spotify_id' => '4kWO6O1BUXcZmaxitpVUwp',
            ],
            [
                'song_name'  => "love nwantiti (ah ah ah)",
                'spotify_id' => '2Xr1dTzJee307rmrkt8c0g',
            ],
            [
                'song_name'  => "I Ain't Worried",
                'spotify_id' => '4h9wh7iOZ0GGn8QVp4RAOB',
            ],
            [
                'song_name'  => 'Beautiful Girls',
                'spotify_id' => '1hGy2eLcmC8eKx7qr1tOqx',
            ],
            [
                'song_name'  => 'Whenever, Wherever',
                'spotify_id' => '2lnzGkdtDj5mtlcOW2yRtG',
            ],
            [
                'song_name'  => 'First Class',
                'spotify_id' => '0wHFktze2PHC5jDt3B17DC',
            ],
            [
                'song_name'  => 'The Lazy Song',
                'spotify_id' => '386RUes7n1uM1yfzgeUuwp',
            ],
        ];

        foreach ($songs as $song) {
            DB::table('music')->insert([
                'song_name'  => $song['song_name'],
                'spotify_id' => $song['spotify_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
