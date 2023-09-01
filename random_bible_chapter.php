<?php
// Array de libros de la Biblia
$books = [
    "Génesis", "Éxodo", "Levítico", "Números", "Deuteronomio", "Josué", "Jueces", "Rut", "1 Samuel", "2 Samuel", "1 Reyes", "2 Reyes",
    // Agrega todos los libros aquí...
    "2 Juan", "3 Juan", "Judas", "Apocalipsis"
];

// Array de la cantidad de capítulos por libro
$chapterCounts = [
    50, 40, 27, 36, 34, 24, 21, 4, 31, 24, 22, 25, 29, 36, 10, 13, 10, 42, 150, 31, 12, 8, 66, 52, 5, 48, 12, 14, 3, 9, 1, 4, 7, 3, 3, 3, 2, 14, 4, 28, 16, 24, 21, 28, 16, 13, 6, 6, 4, 4, 5, 3, 6, 4, 3, 2, 14, 4, 28, 16, 13, 6, 6, 4, 5, 3, 6, 4, 3, 1, 22
];

// Calcula el número total de capítulos en la Biblia
$totalChaptersInBible = array_sum($chapterCounts);

// Genera un número aleatorio entre 0 y 1
$randomProbability = mt_rand() / mt_getrandmax();

// Inicializa variables para realizar la selección
$selectedBook = "";
$cumulativeProbability = 0;

// Itera sobre los libros y selecciona uno en función de las probabilidades
for ($i = 0; $i < count($books); $i++) {
    $probability = $chapterCounts[$i] / $totalChaptersInBible;
    $cumulativeProbability += $probability;

    if ($randomProbability <= $cumulativeProbability) {
        $selectedBook = $books[$i];
        break;
    }
}

// Obtiene el número de capítulos del libro seleccionado
$bookLength = $chapterCounts[array_search($selectedBook, $books)];

// Genera un número aleatorio entre 1 y el número de capítulos del libro seleccionado
$randomChapterNumber = mt_rand(1, $bookLength);

// Imprime el capítulo aleatorio
echo "<p>$selectedBook $randomChapterNumber</p>";
?>
