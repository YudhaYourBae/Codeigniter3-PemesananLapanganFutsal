const Alert = document.getElementById('Created');
const Alert1 = document.getElementById('TidakTerdaftar');
const Alert2 = document.getElementById('Salah');
const Alert3 = document.getElementById('logout');

if(Alert){
  swal("Selamat", "Akun anda berhasil terdaftar.", "success");
}else if(Alert1){
  swal("Maaf", "Akun anda tidak terdaftar.", "error");
}else if(Alert2){
  swal("Maaf", "Password anda salah.", "error");
}else if(Alert3){
  swal("Anda Berhasil Logout.","", "info");
}
