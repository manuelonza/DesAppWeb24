// URL del servicio que proporciona el JSON
        const apiUrl = 'https://hp-api.onrender.com/api/characters';

        // Obtener la lista en HTML
        const charactersList = document.getElementById('characters-list');

        // Hacer una solicitud HTTP para obtener el JSON
        fetch(apiUrl)
            .then(response => response.json())
            .then(charactersData => {
                // Iterar sobre los personajes y agregarlos a la lista
                charactersData.forEach(character => {
                    const listItem = document.createElement('li');

                    // Añadir la imagen
                    const image = document.createElement('img');
                    image.src = character.image;
                    image.alt = character.name;
                    listItem.appendChild(image);

                    // Añadir el nombre del personaje
                    const name = document.createElement('h2');
                    name.textContent = character.name;
                    listItem.appendChild(name);
						 
						    // Casa
                   const house = document.createElement('p');
						var classHouse = character.house || "otros"; // Asigna "otros" si character.house es null o undefined
							house.textContent = 'House: ' + classHouse;
							house.classList.add(classHouse);
							listItem.appendChild(house);
						 
						 	// Patronus
						  const patronus = document.createElement('p');
                    patronus.textContent = 'Patronus: '+character.patronus;
                    listItem.appendChild(patronus);


                    charactersList.appendChild(listItem);
                });
            })
            .catch(error => console.error('Error al obtener el JSON:', error));