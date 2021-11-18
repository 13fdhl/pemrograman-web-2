function cari()
{
    let katakunci =
document.getElementById('txtCari').value;
    if (katakunci == '')
    {
        alert('Anda belum mengisi kata kunci');
    }
    else
    {
        alert('Anda ingin mencari data mahasiswa dengan kata kunci = ' + katakunci);
    }
}