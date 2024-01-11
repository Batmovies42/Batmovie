
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a9c72f49a2.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="/IMG/BATMOVIES-removebg-preview.png">
    <link rel="stylesheet" href="/splide-4.1.3/splide-4.1.3/dist/css/splide.min.css">
</head>
<body>
    
</body>
</html>

<div class="nav-middle flex-div">
                <div class="search-box flex-div">
                    <input type="text" id="search" placeholder="Buscar..." autocomplete="off" onfocus="showSearchBox()" onblur="hideSearchBox()" onkeydown="checkEscapeKey(event)">
                </div>
                </div>

        <ul id="list">
            <a href="/MOVIES/Maestro.html"><li>Maestro</li></a>
            <a href="/MOVIES/It_is_a_Wonderful_Life.html"><li>¡Que bello es vivir!</li></a>
            <a href="/MOVIES/Saltburn.html"><li>Saltburn: El Laberinto</li></a>
            <a href="/SERIES/Breaking_Bad.html"><li>Breaking Bad</li></a>
            <a href="/MOVIES/The_Fellowship_of_the_Ring.html"><li>El señor de los anillo: La comunidad del anillo</li></a>
        </ul> 
        </nav>
        <!-- BUSCADOR-SCRIPT -->
        <script>
            function search() {
                const searchTerm = document.getElementById('search').value.toLowerCase();
                const listItems = document.getElementsByTagName('li');
                let count = 0;
        
                for (let i = 0; i < listItems.length; i++) {
                    const listItem = listItems[i];
                    const text = listItem.textContent.toLowerCase();
        
                    if (text.indexOf(searchTerm) !== -1) {
                        listItem.style.display = '';
                        count++;
                        if (count >= 5) {
                            break;
                        }
                    } else {
                        listItem.style.display = 'none';
                    }
                }
            }
        
            document.addEventListener('DOMContentLoaded', function() {
                search();
            });
        
            document.getElementById('search').addEventListener('input', search);
        
            function showSearchBox() {
                var searchBox = document.getElementById("list");
                searchBox.style.display = "block";
            }
            window.addEventListener('DOMContentLoaded', function() {
    search();
    document.getElementById('search').addEventListener('input', search);
});

function search() {
    const searchTerm = document.getElementById('search').value.toLowerCase();
    const listItems = document.getElementsByTagName('li');
    let count = 0;

    for (let i = 0; i < listItems.length; i++) {
        const listItem = listItems[i];
        const text = listItem.textContent.toLowerCase();

        if (text.indexOf(searchTerm) !== -1) {
            listItem.style.display = '';
            count++;
            if (count >= 5) {
                break;
            }
        } else {
            listItem.style.display = 'none';
        }
    }
}

// Controla si se hizo clic fuera del input
window.addEventListener('click', function(event) {
    var searchBox = document.getElementById("list");

    // Verifica si el elemento clickeado es el input o si es un elemento secundario del input
    if (event.target !== document.getElementById('search') && !document.getElementById('search').contains(event.target)) {
        searchBox.style.display = "none";
    }
});

        </script>