// show or hide form bukti script
function showForm() {
   const select = document.getElementById('jalurPendaftaran');
   const bukti = document.getElementById('bukti');
   const ket = document.getElementById('ket');
   console.log(select.value);
   if (select.value != 1 && select.value != 0) {
      bukti.classList.remove('visually-hidden');
      if (select.value == 2) {
         ket.innerHTML = "Penghargaan atau Prestasi";
         $(bukti).attr("required", true);
      } else if (select.value == 3) {
         ket.innerHTML = "Surat Rekomendasi RMP"
         $(bukti).attr("required", true);
      }
   } else {
      bukti.classList.add('visually-hidden');
   }
}