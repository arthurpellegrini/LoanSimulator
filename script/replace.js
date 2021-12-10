function chargementHistoriqueData(ligne) {
    const capital = ligne.childNodes[1].innerText.split(" ")[0];
    const taux = ligne.childNodes[2].innerText.split(" ")[0];
    const mois = ligne.childNodes[3].innerText.split(" ")[0];
    const inputCapital = document.getElementById("capital");
    const inputTaux = document.getElementById("rate");
    const inputMois = document.getElementById("monthNumber");
    console.log(inputCapital);
    if (!(inputCapital.value === capital && inputTaux.value === taux && inputMois.value === mois)) {
        inputCapital.value = capital;
        inputMois.value = mois;
        inputTaux.value = taux;
    }
}