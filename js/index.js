// Datos de películas (simulados)
const movies = [
  { title: 'Gossip girls', genre: 'Contenidos más vistos' },
  { title: 'A través de mi ventana', genre: 'Contenidos más vistos' },
  { title: 'Misterios de la fe', genre: 'Documentales' },
  { title: 'Lupin', genre: 'Terror' },
  { title: 'La gloria', genre: 'Populares' },
  { title: 'Fatherhood', genre: 'Populares' }
  // Agrega más películas con sus respectivos géneros
];

function searchMovies() {
  const searchTerm = document.getElementById('searchInput').value.toLowerCase();
  const selectedGenre = document.getElementById('genreSelect').value.toLowerCase();

  const filteredMovies = movies.filter(movie => {
    const titleMatch = movie.title.toLowerCase().includes(searchTerm);
    const genreMatch = selectedGenre === '' || movie.genre.toLowerCase() === selectedGenre;
    return titleMatch && genreMatch;
  });

  displayMovies(filteredMovies);
}

function displayMovies(movies) {
  const moviesList = document.getElementById('moviesList');
  moviesList.innerHTML = '';

  if (movies.length === 0) {
    moviesList.innerHTML = '<p>No se encontraron películas.</p>';
    return;
  }

  movies.forEach(movie => {
    const movieElement = document.createElement('div');
    movieElement.classList.add('movie');
    movieElement.textContent = `${movie.title} - Género: ${movie.genre}`;
    moviesList.appendChild(movieElement);
  });
}
