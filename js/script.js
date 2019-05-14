function harga()
{
  var angka = bersihPemisah(bersihPemisah(bersihPemisah(bersihPemisah(document.getElementById('harga').value)))); //input ke dalam angka tanpa titik
  if (document.getElementById('harga').value == "")
  {
    alert("Jangan Dikosongi");
    document.getElementById('harga').focus();
    return false;
  }
    else
    if (angka >= 1)
    {
      alert("angka aslinya : "+angka);
      document.getElementById('harga').focus();
      document.getElementById('harga').value = tandaPemisahTitik(angka);
      return false;
    }
}