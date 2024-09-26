// console.log("dummy reviews update"); // This works
function getReviews() {
    fetch("scripts/dummy-reviews.json")
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
       //     console.log('Fetched data:', data); // Check if data is fetched correctly // this works
            postReviews(data);
        })
        .catch(error => console.error('Error fetching reviews:', error));
}


function postReviews(datas) {
 //   console.log('Here is the data:', datas);  // this works
    const container = document.getElementById('review-container');
    let i = 0;
    datas.forEach(function(data) {
        const reviewList = document.createElement("ul");
        reviewList.classList.add(data.section);
        let LI = document.createElement("li");
        if(i < 9) {
        i++;

        LI.innerHTML = `<span id="${data.id}">
                            <span>${data.name}</span>
                            <span><img src="${data.img}" alt="avatar image ${data.name}" title="${data.license}"></span>
                            <span>${data.comment}</span>
                        </span>`;
        reviewList.appendChild(LI);
        }
        container.appendChild(reviewList);
    });
}

getReviews();