
import Registrasi from './registrasi.js';

let regislist = [];

document.getElementById('formregis').addEventListener('submit', function(event) {
    event.preventDefault();

    let namalengkap = document.getElementById('namalengkap').value;
    let namapanggilan = document.getElementById('namapanggilan').value;
    let usia = parseInt(document.getElementById('usia').value);
    let uangsaku = parseInt(document.getElementById('uangsaku').value);

    if (namalengkap.length < 10 || usia < 25 || uangsaku < 100000 || uangsaku > 1000000) {
        alert('Mohon isi data sesuai kriteria!');
        return;
    }

    let dataregis = new Registrasi(namalengkap, namapanggilan, usia, uangsaku);
    regislist.push(dataregis);

    showAll();
    hitungRataRata();
});

function hitungRataRata() {
    let totaluangsaku = regislist.reduce((sum, dataregis) => sum + dataregis.uangsaku, 0);
    let totalusia = regislist.reduce((sum, dataregis) => sum + dataregis.usia, 0);

    let averageuangsaku = totaluangsaku / regislist.length;
    let averageusia = totalusia / regislist.length;

    let datahitung = document.getElementById('datahitung');
    datahitung.innerHTML = `Rata-rata pendaftar memiliki uang saku sebesar Rp${averageuangsaku.toFixed(2)} dengan rata-rata usia ${averageusia.toFixed(2)}`;
}

function showAll() {
    let listdataregis = document.getElementById('listdataregis');
    listdataregis.innerHTML = '';

    for (let dataregis of regislist) {
        let row = document.createElement('tr');
        row.innerHTML = `<td>${dataregis.namalengkap}</td><td>${dataregis.namapanggilan}</td><td>${dataregis.usia} Tahun </td><td>Rp${dataregis.uangsaku}</td>`;
        listdataregis.appendChild(row);
    }
}
