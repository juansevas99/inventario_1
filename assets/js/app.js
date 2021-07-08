const d = document

function display(response) {
	$cabecera = document.querySelector("#tabla-admin > .cabecera")
	$cadenaCabecera = ""
	for (let i = 0; i < Object.keys(response[0]).length; i++) {
		$cadenaCabecera += "<th>" + Object.keys(response[0])[i] + "</th>"
	}
	$cadenaCabecera += "<th colspan=3>Accciones</th>"
	$cabecera.innerHTML = $cadenaCabecera
	$cuerpo = document.querySelector("#tabla-admin > .cuerpo")
	$cadenaCuerpo = ""
	for (let j = 0; j < response.length; j++) {
		$cadenaCuerpo += "<tr>"
		for (let k = 0; k < Object.keys(response[j]).length; k++) {
			$cadenaCuerpo += "<td>" + response[j][Object.keys(response[0])[k]] + "</td>"
		}

		$cadenaCuerpo +=
			"<td><button type='button' class='btn btn-primary' data-bs-toggle='modal' style='font-size: 80%;' data-bs-target='#Detalles'>Detalles</button><td><button style='font-size: 80%;' type='button' class='btn btn-primary popUpdate' onclick='updateAdmin(this)' data-id='" +
			response[j][Object.keys(response[0])[0]] +
			"' >Actualizar</button></td><td><button style='font-size: 80%;' class='btn btn-danger' onclick=deleteAdmin(this) data-id=" +
			response[j][Object.keys(response[0])[0]] +
			">Borrar</button></td></tr>"
	}
	

	$cuerpo.innerHTML = $cadenaCuerpo
}
function administracion(element) {
	// document.getElementById('crearRegistro')
	console.log(element + "/list")
	fetch("http://localhost/project_1/" + element + "/list", {
		method: "POST",
	})
		.then((response) => {
			if (response.ok == false || response.status > 299) {
				return Promise.reject({ err: "Error, no se encontro el archivo json" })
				response[0]
			}
			return response.json()
		})
		.then((response) => {
			// console.log(response)
			display(response)
		})
		.catch((err) => {
			console.error(err)
		})
}
function crearProducto() {
	// por ahora, la busqueda de datos en cada Select no dependera de la vista si no de la logica que se maneje en Javascript
	document
		.querySelector('[name="estado_id_estado"]')
		.addEventListener("focus", (el) => {
			fetch("http://localhost/project_1/state/list")
				.then((response) => {
					if (response.ok == false || response.status > 299) {
						return Promise.reject({ err: "Error, no se encontro el archivo" })
					}
					return response.json()
				})
				.then((response) => {
					options = ""

					for (let i = 0; i < response.length; i++) {
						options +=
							"<option value=" +
							response[i].id +
							">" +
							response[i].nombre +
							"</option>"
					}
					document.querySelector('[name="estado_id_estado"]').innerHTML = options
				})
				.catch((err) => {
					console.error("Error Servidor !!" + err.err)
				})
		})
	document
		.querySelector('[name="categoria_id_categoria"]')
		.addEventListener("focus", () => {
			fetch("http://localhost/project_1/category/list")
				.then((response) => {
					if (response.ok == false || response.status > 299) {
						return Promise.reject({ err: "Error, no se encontro el archivo" })
					}
					return response.json()
				})
				.then((response) => {
					options = ""

					for (let i = 0; i < response.length; i++) {
						options +=
							"<option value=" +
							response[i].Id +
							">" +
							response[i].Nombre +
							"</option>"
					}

					document.querySelector('[name="categoria_id_categoria"]').innerHTML =
						options
				})

				.catch((err) => {
					console.error("Error Servidor !!" + err.err)
				})
		})
	document
		.querySelector('[name="proveedor_id_proveedor"]')
		.addEventListener("focus", () => {
			fetch("http://localhost/project_1/supplier/list")
				.then((response) => {
					if (response.ok == false || response.status > 299) {
						return Promise.reject({ err: "Error, no se encontro el archivo" })
					}
					return response.json()
				})
				.then((response) => {
					options = ""

					for (let i = 0; i < response.length; i++) {
						options +=
							"<option value=" +
							response[i].Id +
							">" +
							response[i].Nombre +
							"</option>"
					}

					document.querySelector('[name="proveedor_id_proveedor"]').innerHTML =
						options
				})

				.catch((err) => {
					console.error("Error Servidor !!" + err.err)
				})
		})
	document
		.querySelector('[name="marca_id_marca"]')
		.addEventListener("click", () => {
			fetch("http://localhost/project_1/brand/list")
				.then((response) => {
					if (response.ok == false || response.status > 299) {
						return Promise.reject({ err: "Error, no se encontro el archivo" })
					}
					return response.json()
				})
				.then((response) => {
					options = ""

					for (let i = 0; i < response.length; i++) {
						options +=
							"<option value=" +
							response[i].Id +
							">" +
							response[i].Nombre +
							"</option>"
					}

					document.querySelector('[name="marca_id_marca"]').innerHTML = options
				})

				.catch((err) => {
					console.error("Error Servidor !!" + err.err)
				})
		})
}

function atributosProducto() {
	fetch("index.php?cl=atributo&me=visualizar")
		.then((response) => {
			if (response.ok == false || response.status > 299) {
				return Promise.reject({ err: "Error, no se encontro el archivo" })
			}
			return response.json()
		})
		.then((response) => {
			atributos = ""

			for (let i = 0; i < response.length; i++) {
				atributos += "<>"
			}

			document.querySelector('[name="marca_id_marca"]').innerHTML = atributos
		})

		.catch((err) => {
			console.error("Error Servidor !!" + err.err)
		})
}

function productos() {
	fetch("http://localhost/project_1/product/list", {
		method: "GET",
	})
		.then((response) => {
			if (response.ok == false || response.status > 299) {
				return Promise.reject({ err: "Error, no se encontro el archivo" })
				response[0]
			}
			return response.json()
		})
		.then((response) => {
			display(response)
		})
		.catch((err) => {
			console.error(err)
		})
}

function planeacion() {
	document
		.querySelector('[name="producto_id_producto"]')
		.addEventListener("focus", () => {
			fetch("http://localhost/project_1/product/list")
				.then((response) => {
					if (response.ok == false || response.status > 299) {
						return Promise.reject({ err: "Error, no se encontro el archivo" })
					}
					return response.json()
				})
				.then((response) => {
					options = ""

					for (let i = 0; i < response.length; i++) {
						options +=
							"<option value=" +
							response[i].Id +
							">" +
							response[i].Producto +
							"</option>"
					}

					document.querySelector('[name="producto_id_producto"]').innerHTML =
						options
				})

				.catch((err) => {
					console.error("Error Servidor !!" + err.err)
				})
		})
	document
		.querySelector('[name="proveedor_id_proveedor"]')
		.addEventListener("focus", () => {
			fetch("http://localhost/project_1/supplier/list")
				.then((response) => {
					if (response.ok == false || response.status > 299) {
						return Promise.reject({ err: "Error, no se encontro el archivo" })
					}
					return response.json()
				})
				.then((response) => {
					options = ""

					for (let i = 0; i < response.length; i++) {
						options +=
							"<option value=" +
							response[i].Id +
							">" +
							response[i].Nombre +
							"</option>"
					}

					document.querySelector('[name="proveedor_id_proveedor"]').innerHTML =
						options
				})

				.catch((err) => {
					console.error("Error Servidor !!" + err.err)
				})
		})
}
function gestionInventario() {
	fetch("http://localhost/project_1/purchaseOrder/list", {
		method: "GET",
	})
		.then((response) => {
			if (response.ok == false || response.status > 299) {
				return Promise.reject({ err: "Error, no se encontro el archivo" })
				response[0]
			}
			return response.json()
		})
		.then((response) => {
			$cabecera = document.querySelector("#tabla-admin > .cabecera")
			$cadenaCabecera = ""
			for (let i = 0; i < Object.keys(response[0]).length; i++) {
				$cadenaCabecera += "<th>" + Object.keys(response[0])[i] + "</th>"
			}
			$cadenaCabecera += "<th colspan=3>Accciones</th>"
			$cabecera.innerHTML = $cadenaCabecera
			$cuerpo = document.querySelector("#tabla-admin > .cuerpo")
			$cadenaCuerpo = ""
			for (let j = 0; j < response.length; j++) {
				$cadenaCuerpo += "<tr>"
				for (let k = 0; k < Object.keys(response[j]).length; k++) {
					$cadenaCuerpo +=
						"<td>" + response[j][Object.keys(response[0])[k]] + "</td>"
				}

				$cadenaCuerpo +=
					"<td><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#Detalles'>Detalles</button><td><a href='http://localhost/project_1/entries/create/" +
					response[j][Object.keys(response[0])[0]] +
					"' class='btn btn-warning' >Gestionar Entradas</a></td><td><a href='http://localhost/project_1/outputs/create/" +
					response[j][Object.keys(response[0])[0]] +
					"' class='btn btn-warning'>Gestionar Salidas</a></td></tr>"
			}

			$cuerpo.innerHTML = $cadenaCuerpo
		})
		.catch((err) => {
			console.error(err)
		})
}

function crearEntrada() {
	document
		.querySelector('[name="tipos_entrada_id_tipos_entrada"]')
		.addEventListener("focus", () => {
			fetch("index.php?cl=tipo_entrada&me=visualizar")
				.then((response) => {
					if (response.ok == false || response.status > 299) {
						return Promise.reject({ err: "Error, no se encontro el archivo" })
					}
					return response.json()
				})
				.then((response) => {
					options = ""

					for (let i = 0; i < response.length; i++) {
						options +=
							"<option value=" +
							response[i].Id +
							">" +
							response[i].Tipos +
							"</option>"
					}

					document.querySelector(
						'[name="tipos_entrada_id_tipos_entrada"]'
					).innerHTML = options
				})

				.catch((err) => {
					console.error("Error Servidor !!" + err.err)
				})
		})
}
function crearSalida() {
	document
		.querySelector('[name="id_tipo_salida"]')
		.addEventListener("focus", () => {
			fetch("index.php?cl=tipo_salida&me=visualizar")
				.then((response) => {
					if (response.ok == false || response.status > 299) {
						return Promise.reject({ err: "Error, no se encontro el archivo" })
					}
					return response.json()
				})
				.then((response) => {
					options = ""

					for (let i = 0; i < response.length; i++) {
						options +=
							"<option value=" +
							response[i].Id +
							">" +
							response[i].Tipos +
							"</option>"
					}

					document.querySelector('[name="id_tipo_salida"]').innerHTML = options
				})

				.catch((err) => {
					console.error("Error Servidor !!" + err.err)
				})
		})
}

function reportes(element) {
	fetch("http://localhost/project_1/reports/" + element, {
		method: "POST",
	})
		.then((response) => {
			if (response.ok == false || response.status > 299) {
				return Promise.reject({ err: "Error, no se encontro el archivo json" })
				response[0]
			}
			return response.json()
		})
		.then((response) => {
			console.log(response)
			$cabecera = document.querySelector("#tabla-admin > .cabecera")
			$cadenaCabecera = ""
			for (let i = 0; i < Object.keys(response[0]).length; i++) {
				$cadenaCabecera += "<th>" + Object.keys(response[0])[i] + "</th>"
			}
			$cabecera.innerHTML = $cadenaCabecera
			$cuerpo = document.querySelector("#tabla-admin > .cuerpo")
			$cadenaCuerpo = ""
			for (let j = 0; j < response.length; j++) {
				$cadenaCuerpo += "<tr>"
				for (let k = 0; k < Object.keys(response[j]).length; k++) {
					$cadenaCuerpo +=
						"<td>" + response[j][Object.keys(response[0])[k]] + "</td>"
				}
			}

			$cuerpo.innerHTML = $cadenaCuerpo
		})
		.catch((err) => {
			console.error(err)
		})
}

function updateAdmin(a) {
	$showed = document.querySelector("#popoverUpdate").classList.toggle("d-none")
	if (!$showed) {
		fetch(
			"http://localhost/project_1/" +
				document.getElementById("popup").getAttribute("data-pop") +
				"/update/" +
				a.dataset.id
		)
			.then((response) => {
				if (response.ok == false || response.status > 299) {
					return Promise.reject("Error, no se encontro el archivo")
				}
				return response.text()
			})
			.then((response) => {
				// console.log(response);
				document.querySelector("#popoverUpdate> div > div").innerHTML = response
			})

			.catch((err) => {
				console.error(err)
			})
	}
}
function deleteAdmin(a) {
	id = a.dataset.id

	fetch(
		"http://localhost/project_1/" +
			document.getElementById("popup").getAttribute("data-pop") +
			"/delete/" +
			id
	)
		.then((response) => {
			if (response.ok == false || response.status > 299) {
				return Promise.reject({ err: "Error, no se encontro el archivo" })
				response[0]
			}
			return response.json()
		})
		.then((response) => {
			// console.log(response)
			display(response)
		})
		.catch((err) => {
			console.error(err.err)
		})
}


function paginate(pages){
	cadena=""
	cadena+="<li class='page-item  small'><a class='page-link' onclick=test(1)>First</a></li>"
	for (let i = 1; i <=pages ; i++) {
		cadena+="<li class='page-item  small'><a class='page-link' onclick=test("+i+")>"+i+"</a></li>"		
	}
	cadena+="<li class='page-item  small'><a class='page-link' onclick=test("+pages+")>Last</a></li>"

	document.getElementById("pagination").innerHTML=cadena;
}
function test(id) {
	fetch("http://localhost/project_1/test/list/"+id)
		.then((response) => {
			if (response.ok == false || response.status > 299) {
				return Promise.reject({ err: "Error, no se encontro el archivo" })
				response[0]
			}
			return response.json()
		})
		.then((response) => {
			// console.log(response)
			display(response[0]);
			if (response[1]){
				paginate(response[1]);
			}
			
		})
		.catch((err) => {
			console.error(err)
		})
}

d.addEventListener("DOMContentLoaded", () => {
	if (document.getElementById("administracion")) {
		$pop = document.getElementById("popup")

		document.querySelector("#tabla-admin > .cabecera").innerHTML =
			"Extrayendo Datos del servidor ..."
		document.querySelectorAll("[data-ruta]").forEach((e) => {
			e.addEventListener("click", (element) => {
				$pop.setAttribute(
					"data-pop",
					element.currentTarget.getAttribute("data-ruta")
				)
				administracion(element.currentTarget.getAttribute("data-ruta"))
			})
		})
		setTimeout(() => {
			administracion(
				document.querySelector("[data-ruta]").getAttribute("data-ruta")
			)
			$pop.setAttribute("data-pop", "user")
		}, 2000)
		document.querySelectorAll(".pop").forEach((e) => {
			e.addEventListener("click", (el) => {
				$showed = document.querySelector("#popover").classList.toggle("d-none")
				if (!$showed) {
					console.log(
						"http://localhost/project_1/" +
							document.getElementById("popup").getAttribute("data-pop") +
							"/showCreate"
					)
					fetch(
						"http://localhost/project_1/" +
							document.getElementById("popup").getAttribute("data-pop") +
							"/showCreate"
					)
						.then((response) => {
							if (response.ok == false || response.status > 299) {
								return Promise.reject("Error, no se encontro el archivo")
							}
							return response.text()
						})
						.then((response) => {
							document.querySelector("#popover> div > div").innerHTML = response
						})
						.catch((err) => {
							console.error(err)
						})
				}
			})
		})
	} else if (document.getElementById("productos")) {
		document.querySelector("#tabla-admin > .cabecera").innerHTML =
			"Extrayendo Datos del servidor ..."
		productos()
	} else if (document.getElementById("crearProducto")) {
		crearProducto()
	} else if (document.getElementById("atributosProducto")) {
		atributosProducto()
	} else if (document.getElementById("planeacion")) {
		planeacion()
	} else if (document.getElementById("gestionInventario")) {
		gestionInventario()
	} else if (document.getElementById("crearEntrada")) {
		crearEntrada()
	} else if (document.getElementById("crearSalida")) {
		crearSalida()
	} else if (document.getElementById("test")) {
			test(1)
		
		


	} else if (document.getElementById("reportes")) {
		document.querySelectorAll("[data-reporte]").forEach((e) => {
			e.addEventListener("click", (element) => {
				reportes(element.currentTarget.getAttribute("data-reporte"))
			})
		})
	}
})

// --------------------------------------------------------------------------------------------------------------
