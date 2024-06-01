function searchProducts() {
    var searchTerm = document.getElementById("searchInput").value.toLowerCase();
    resetSearchStyles();

    var productCards = document.getElementsByClassName("product-card");
    for (var i = 0; i < productCards.length; i++) {
        var card = productCards[i];
        var cardTitle = card.getElementsByClassName("card-title")[0].innerText.toLowerCase();
        var cardText = card.getElementsByClassName("card-text")[0].innerText.toLowerCase();

        if (cardTitle.includes(searchTerm) || cardText.includes(searchTerm)) {
            highlightMatchedText(card, cardTitle, cardText, searchTerm);
        }
    }
}

function resetSearchStyles() {
    var productCards = document.getElementsByClassName("product-card");
    for (var i = 0; i < productCards.length; i++) {
        var card = productCards[i];
        var cardTitle = card.getElementsByClassName("card-title")[0];
        var cardText = card.getElementsByClassName("card-text")[0];

        cardTitle.innerHTML = cardTitle.innerText;
        cardText.innerHTML = cardText.innerText;
    }
}

function highlightMatchedText(card, title, text, term) {
    var highlightedTitle = title.replace(new RegExp(escapeRegExp(term), "gi"), function (match) {
        return '<span class="highlight">' + match + '</span>';
    });

    var highlightedText = text.replace(new RegExp(escapeRegExp(term), "gi"), function (match) {
        return '<span class="highlight">' + match + '</span>';
    });

    card.getElementsByClassName("card-title")[0].innerHTML = highlightedTitle;
    card.getElementsByClassName("card-text")[0].innerHTML = highlightedText;
}

function escapeRegExp(string) {
    return string.replace(/[.*+?^${}()|[\]\\]/g, "\\$&");
}