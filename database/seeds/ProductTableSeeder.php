<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $productBrandIds = [1, 52, 34, 24, 14];
         $productNames = ["BOMBONIERA NA METALOWEJ NODZE SILJE LENE BJERRE", "ZEGAR STOJĄCY ALAIN NICKEL L EICHHOLTZ", "ZEGAR STOJĄCY BAXTER NICKEL&LEATHER S EICHHOLTZ", "SZAFKA NOCNA HAMPTON CROSS WHITE SL COLLECTION", "DYFUZOR ZAPACHOWY DODICI MAX BENJAMIN"];
         $productCodes = ["LB/A00003233", "EICH/106596", "EICH/106100", "SL/700251z", "MB/100D12"];
         $productImages = ["https://sweetliving.pl/image/cache/catalog/LENEBJERRE/530694316-500x500.jpg", "https://sweetliving.pl/image/cache/catalog/RIVIERA%20MAISON/107176_0-500x500.jpg", "https://sweetliving.pl/image/cache/catalog/EICHHOLTZ/zegar_baxter_eichholtz-500x500.jpg"];
         $productDescriptions = [
              "Bomboniera na wysokiej metalowej nóżce z pokrywą duńskiej marki Lene Bjerre. Szklana bomboniera na smukłej nodze jest idealna do ozdobny. Świetnie sprawdzi się też jako ozdoba stołu lub konsoli.",
              "Zegar stojący Alain marki Eichholtz. To elegancki dodatek, który sprawdzi się w gabinecie na biurku, lub na kominku w salonie. Może być także świetnym prezentem dla kogoś kto ceni klasyczną elegancję. Wykonano go z metalu pokrytego niklem, kształtem przypomina zegarek kieszonkowy, zegarek ma retro tarczę z czarnym cyferblatem.",
              "Zegar stojący Baxter marki Eichholtz. To elegancki dodatek, który sprawdzi się w gabinecie na biurku, lub na kominku w salonie. Może być także świetnym prezentem dla kogoś kto ceni klasyczną elegancję, angielski styl, zegar ma na tarczy napis 'London'. Wykonano go z metalu pokrytego niklem i skóry, kształtem przypomina zegarek kieszonkowy, retro tarcza z czarnym cyferblatem została zawieszona na mocowaniu w kształcie strzemienia.",
              "Szafka nocna Hampton Cross SL Collection. Eleganckie szafki idealnie sprawdzają się koło łóżka w sypialni, w hallu posłużą za miejsce do przechowywania drobiazgów. W salonie idealnie dopełnią stylizację w stylu Hampton, ustawisz na nich świeczniki, lampiony lub wazon bądź lampę. Kupujesz szafkę w kolorze białym, wybierz wersję mat lub połysk oraz uchwyt z proponowanych na zdjęciu, wpisz w uwagach na końcu zamówienia. Produkt dostępny także w innych kolorach lub rozmiarze, w celu zamówienia wyślij zapytanie lub odwiedź Showroom Sweet Living Home Inspirations, gdzie zobaczysz inne modele szafek, zapraszamy!",
              "Dyfuzor zapachowy Dodici z kolekcji klasycznej, irlandzkiej marki Max Benjamin. Kompozycja zapachowa z olejkiem rozmarynowym i dodatkiem sycylijskich cytryn oraz majerankiem, przykryta kurtyną z toskańskiej lawendy, ożywia nastrój w pomieszczeniu. Dyfuzor ma pojemność 150 ml. Aromat utrzymuje się minimum 4 miesiące. Dyfuzor idealnie nadaje się na prezent, jest zapakowany w eleganckie kartonowe opakowanie. Dyfuzory zapachowe Max Benjamin mają niski poziom alergenów i są bezalkoholowe. Proces tworzenia zapachów to sztuka łączenia starannie wyselekcjonowanych olejków eterycznych mająca na celu czułe wymodelowanie każdego z produktów. Wszystkie zapachy Max Benjamin mają holistyczne właściwości, zostały zaprojektowane aby odstresować, zrelaksować i uspokoić Twój umysł."];
         $productPrices = [885, 545, 625, 115, 635];
         $productQuantities = [145, 0, 2536, 12, 35];
         $productAvailabilities = [1, 0, 1, 1, 1];

         for ($i = 0; $i < 5; $i++) {
              $product = new \App\Product([
                  'product_id' => $i,
                  'product_brand_id' => $productBrandIds[$i],
                  'product_code' => $productCodes[$i],
                  'product_name' => $productNames[$i],
                  'product_image' => $productImages[$i],
                  'product_description' => $productDescriptions[$i],
                  'product_price' => $productPrices[$i],
                  'product_quantity' => $productQuantities[$i],
                  'product_availability' => $productAvailabilities[$i]
             ]);
             $product->save();
         }
          // $product = new \App\Pruduct([
          //      'product_id' => ""
          // ]);

    }
}
