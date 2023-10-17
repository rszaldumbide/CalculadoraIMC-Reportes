document.querySelector("#calculoDeIMC").addEventListener("click", calculateBMI);
document.querySelector("#search").addEventListener("click", getCodigos);


function calculateBMI(e) {
  var weight = document.getElementById("peso").value;
  var height = document.getElementById("altura").value;
  var bmi = weight / (height * height);
  var respuesta = "";
  if (bmi < 18.5) {
    respuesta = "Peso bajo";
  } else if (bmi >= 18.5 && bmi <= 24.9) {
    respuesta = "Peso normal";
  } else if (bmi >= 25 && bmi <= 29.9) {
    respuesta = "Sobrepeso";
  } else if (bmi >= 30 && bmi <= 34.9) {
    respuesta = "Obesidad grado 1";
  } else if (bmi >= 35 && bmi <= 39.9) {
    respuesta = "Obesidad grado 2";
  } else if (bmi > 39.9 && bmi <= 49.9) {
    respuesta = "Obesidad grado 3";
  } else if (bmi >= 50) {
    respuesta = "Obesidad grado 4";
  }

  document.getElementById("IMC").innerHTML = "<b>Tu IMC es: </b> " + bmi.toFixed(2) + " --> " + respuesta;

  e.preventDefault();
}

function showDiv(select) {
  var divs = document.getElementsByClassName("option");
  for (var i = 0; i < divs.length; i++) {
    divs[i].style.display = "none";
  }
  document.getElementById(select.value).style.display = "block";
}


const Agregar = document.getElementById("agregarPaciente");
const div = document.getElementById("datosCrearPaciente");

Agregar.addEventListener("click", function () {
  if (div.style.display === "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
});

const buscar = document.getElementById("ocultar");
const div2 = document.querySelector("#miras");

buscar.addEventListener("click", function () {
  if (div2.style.display === "none") {
    div2.style.display = "block";
  } else {
    div2.style.display = "none";
  }
});


function getCodigos(e) {

  const username = document.querySelector("#txtDatos").value; //aqui se toma el valor que quieres buscar en la api, por ejemplo busca por id

  fetch(`http://localhost/api/index.php?id=${username}`)
      .then((response) => response.json())
/*       .then((data) => console.log(data)) */

      .then((data) => {
          document.querySelector(".usuariobox").innerHTML = `
          <div class="row text-center mt-5">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
              <span href="" class="card border-0 text-dark p-3 " style="background:#F1FAFB;">
                  <h6 style="font-size: x-large;">Actualizar campos del Paciente</h6>
                  <form>
                      <div class="input-group  mb-3">
                              <div class="input-group-prepend ">
                                  <span class="input-group-text" id="basic-addon1">Numero:</span>
                              </div>
                              <input type='text' required disabled class='form-control' id='paca_id' name='paca_id' value="${data[0].id}">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">Cedula:</span>
                              </div>
                              <input type="text" required id="paca_ced" name="paca_ced" class="form-control" value="${data[0].cedula}">
                          </div>    
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">Nombre:</span>
                              </div>
                              <input type='text' required class='form-control' id='paca_nombre' name='paca_nombre' value="${data[0].nombre}">
                          </div>
                          <div class=" input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">Apellido:</span>
                              </div>
                              <input type="text" required class="form-control" id="paca_ape" name="paca_ape" value="${data[0].apellido}">
                          </div>
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">Genero:</span>
                              </div>
                              <input type="text" required class="form-control" id="paca_genero" name="paca_genero" value="${data[0].genero}">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">Edad:</span>
                              </div>
                              <input type="text" required class="form-control" id="paca_edad" name="paca_edad" value="${data[0].edad}">
                          </div>

                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">Rango IMC:</span>
                              </div>
                              <input type="text" required class="form-control" id="paca_rangoimc" name="paca_rangoimc" value="${data[0].rangoimc}">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">Valor IMC:</span>
                              </div>
                              <input type="text" class="form-control" required id="paca_valorimc" name="paca_valorimc" value="${data[0].valorimc}">
                          </div>
                      <input type="submit" class="btn btn-dark" onclick="postActualizar()" value="Actualizar Datos"></input>
                  </form>
              </span>
          </div>
          <div class="col-lg-1"></div>`;
      })
      .catch((err) => {
          document.querySelector(".usuariobox").innerHTML = `
          <div class="row text-center">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
              <span href="" class="card border-0 text-dark p-3 " style="background:#F1FAFB;">
              <h5>No existe ese usuario</h5>
              <p>(*/ω＼*)</p>
          </div>
          </div>
          <div class="col-lg-1"></div>`;
          console.log("no encontrado", err);
      });

  e.preventDefault();

}

function postActualizar(){
  
  var iid = document.getElementById("paca_id");
  var iname = document.getElementById("paca_nombre");
  var iedad = document.getElementById("paca_edad");
  var iape = document.getElementById("paca_ape");
  var iced = document.getElementById("paca_ced");
  var ige = document.getElementById("paca_genero");
  var ivi = document.getElementById("paca_valorimc");
  var iri = document.getElementById("paca_rangoimc");

  var body = {
        "id": iid.value,
        "nombre": iname.value,
        "edad": iedad.value,
        "apellido": iape.value,
        "cedula": iced.value,
        "genero": ige.value,
        "valorimc": ivi.value,
        "rangoimc": iri.value,
        "estado": "1"
    }
    fetch('http://localhost/api/indexActualizar.php', {
        method: 'PUT',
        body: JSON.stringify(body),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then((response) => response.json())
    .then((data) => {alert('Actualizado!')})
    .catch((err) => {alert('No se pudo actualizar!')});

    e.preventDefault();
}