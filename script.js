document.addEventListener("DOMContentLoaded", function() {
    var rows = document.querySelectorAll(".clickable-row");
    rows.forEach(function(row) {
      row.style.cursor = "pointer";
      row.addEventListener("click", function() {
        window.location.href = row.dataset.href;
      });
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    const nazionalita_id = document.getElementById("nazionalita_id");
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
    russo: "https://flagcdn.com/w40/ru.png"
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
      const modalEl = document.getElementById('modalPilota');
      const myModal = new bootstrap.Modal(modalEl, {
        focus: false   // disabilita lo scroll automatico
      });
      myModal.show();
    });