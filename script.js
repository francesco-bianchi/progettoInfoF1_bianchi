document.addEventListener("DOMContentLoaded", function () {
  var rows = document.querySelectorAll(".clickable-row");
  rows.forEach(function (row) {
    row.style.cursor = "pointer";
    row.addEventListener("click", function () {
      window.location.href = row.dataset.href;
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const nazionalita_id = document.querySelector(".nazionalita_id");
  const nazionalita = nazionalita_id.textContent.trim().toLowerCase();
  console.log(nazionalita);

  const bandiere = {
    italiano: "https://flagcdn.com/w40/it.png",
    francese: "https://flagcdn.com/w40/fr.png",
    tedesco: "https://flagcdn.com/w40/de.png",
    spagnolo: "https://flagcdn.com/w40/es.png",
    britannico: "https://flagcdn.com/w40/gb.png",
    finlandese: "https://flagcdn.com/w40/fi.png",
    olandese: "https://flagcdn.com/w40/nl.png",
    messicano: "https://flagcdn.com/w40/mx.png",
    cinese: "https://flagcdn.com/w40/cn.png",
    giapponese: "https://flagcdn.com/w40/jp.png",
    thailandese: "https://flagcdn.com/w40/th.png",
    americano: "https://flagcdn.com/w40/us.png",
    brasiliano: "https://flagcdn.com/w40/br.png",
    danese: "https://flagcdn.com/w40/dk.png",
    australiano: "https://flagcdn.com/w40/au.png",
    monegasco: "https://flagcdn.com/w40/mc.png",
    neozelandese: "https://flagcdn.com/w40/nz.png",
    canadese: "https://flagcdn.com/w40/ca.png",
    russo: "https://flagcdn.com/w40/ru.png",
    austriaco: "https://flagcdn.com/w40/at.png",
    svizzero: "https://flagcdn.com/w40/ch.png",
    turco: "https://flagcdn.com/w40/tr.png",
    qatariota: "https://flagcdn.com/w40/qa.png",
    vietnamita: "https://flagcdn.com/w40/vn.png",
    azerbaijan: "https://flagcdn.com/w40/az.png",
    ungherese: "https://flagcdn.com/w40/hu.png",
    belga: "https://flagcdn.com/w40/be.png",
    portoghese: "https://flagcdn.com/w40/pt.png",
    arabo: "https://flagcdn.com/w40/sa.png",
    singapore: "https://flagcdn.com/w40/sg.png",
    emiratino: "https://flagcdn.com/w40/ae.png"
  };



  if (bandiere[nazionalita]) {
    const img = document.createElement("img");
    img.src = bandiere[nazionalita];
    img.alt = `Bandiera ${nazionalita}`;
    img.width = 40;

    // Sostituisce il contenuto con l'immagine
    nazionalita_id.replaceWith(img);
  }
});

document.addEventListener('DOMContentLoaded', () => {
  const modalPilota = document.getElementById('modalPilota');
  const pilotaModal = new bootstrap.Modal(modalPilota, {
    focus: false   // disabilita lo scroll automatico
  });
  pilotaModal.show();
});

document.addEventListener('DOMContentLoaded', () => {
  const modalScuderia = document.getElementById('modalScuderia');
  const scuderiaModal = new bootstrap.Modal(modalScuderia, {
    focus: false   // disabilita lo scroll automatico
  });
  scuderiaModal.show();
});

document.addEventListener('DOMContentLoaded', () => {
  const modalPilota = document.getElementById('modalPista');
  const pilotaModal = new bootstrap.Modal(modalPilota, {
    focus: false   // disabilita lo scroll automatico
  });
  pilotaModal.show();
});

document.addEventListener("DOMContentLoaded", function () {
  const clickExtra = document.getElementById("clickExtra");
  const extraContainer = document.getElementById("extraContainer");

  clickExtra.addEventListener("click", function () {
    clickExtra.classList.add("d-none");
    extraContainer.classList.remove("d-none");
  });
});