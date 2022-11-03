function get10PopularDogs(data) {
    popularDogs = data.sort(function(a, b){
        return b.popularity - a.popularity;
    });

    return data.slice(0,10);
}

function redirect(url) {
    window.location.replace(url);
}

