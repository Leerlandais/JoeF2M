function getReviews() {
    fetch("dummy-reviews.json")
        .then(function(response){
            response.json().then(function(data){
                postReviews(data);
            });
        })
        .catch(error => console.error('Error fetching reviews:', error));
}

