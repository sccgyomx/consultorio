<template>
    <div class="container">
        <div class="container" v-if="currentUser.role === 'doctor'">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h1 class="display-5">Listado de acciones</h1>
                    <ul class="lista-groupo">
                        <router-link
                            class="lista-groupo-item"
                            to="/medicalPatients"
                            >Ver todos los pacientes</router-link
                        >
                    </ul>
                </div>
            </div>
        </div>

        <!-- logica para el paciente -->
        <div class="container" v-if="currentUser.role === 'patient'">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <template v-if="patient.length != 0">
                        <h1 class="display-5">Datos del paciente</h1>
                        <div class="table-reponsive">
                            <table class="table table-dark rounded">
                                <tr>
                                    <th>Numero de paciente</th>
                                    <td>
                                        {{ patient.id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Nombre del paciente</th>
                                    <td>
                                        {{ patient.name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Genero del paciente</th>
                                    <td>
                                        {{ patient.gender }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Fecha de nacimiento del paciente</th>
                                    <td>
                                        {{ patient.date_of_birth }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Direccion del paciente</th>
                                    <td>
                                        {{ patient.address }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Numero de telefono del paciente</th>
                                    <td>
                                        {{ patient.phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Peso del paciente (En Kilogramos)</th>
                                    <td>
                                        {{ patient.weight }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Altura del paciente (En Metros)</th>
                                    <td>
                                        {{ patient.height }}
                                    </td>
                                </tr>
                            </table>

                            <router-link
                                :to="`/medicalPatients/healtConditions${patient.id}`"
                                class="btn btn-warning btn-block mb-2 mt-2"
                            >
                                Agregar signos vitales
                            </router-link>
                        </div>
                    </template>
                    <template v-else>
                        <h1 class="display-5">Buscar Paciente</h1>
                        <label for=""> Introdusca su numero de paciente </label>
                        <label for="">
                            El cual le proporcionado por el medico
                        </label>
                        <form>
                            <div class="form-group">
                                <input
                                    class="form-control mr-sm-2"
                                    type="text"
                                    placeholder="Numero de paciente"
                                    aria-label="Search"
                                    v-model="numberPatient"
                                />
                            </div>
                            <button
                                class="btn btn-outline-success btn-block"
                                type="button"
                                @click="buscarMyPatient"
                            >
                                Buscar
                            </button>
                            <div
                                v-if="errors.length > 0"
                                class="alert alert-danger mt-2 mb-2"
                                role="alert"
                            >
                                <ul>
                                    <li v-for="error in errors" :key="error.id">
                                        {{ error }}
                                    </li>
                                </ul>
                            </div>
                        </form>

                        <template v-if="medical_patient != null">
                            <div class="table-reponsive mt-2 mb-2">
                                <table class="table table-dark rounded">
                                    <tr>
                                        <th>Numero de paciente</th>
                                        <td>
                                            {{ medical_patient.id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Nombre del paciente</th>
                                        <td>
                                            {{ medical_patient.name }}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <button
                                class="btn btn-success btn-block"
                                type="button"
                                @click="sincronizar"
                            >
                                Sincronizar
                            </button>
                        </template>
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Home",
    created() {
        axios
            .get(`/api/search/${this.currentUser.id}`, {
                headers: {
                    Authorization: `Bearer ${this.currentUser.token}`,
                },
            })
            .then((response) => {
                this.patient = response.data;
            });
    },
    data() {
        return {
            patient: {},
            numberPatient: null,
            medical_patient: null,
            errors: [],
        };
    },
    computed: {
        currentUser() {
            // console.log(this.$store.getters.currentUser);
            return this.$store.getters.currentUser;
        },
    },
    methods: {
        buscarMyPatient() {
            this.errors = [];
            if (this.numberPatient != null) {
                if (this.validarEntrada(this.numberPatient)) {
                    axios
                        .get(`/api/medicalPatients/${this.numberPatient}`, {
                            headers: {
                                Authorization: `Bearer ${this.currentUser.token}`,
                            },
                        })
                        .then((response) => {
                            if (
                                response.data.name === undefined ||
                                response.data.id === undefined
                            ) {
                                this.errors.push(
                                    "Compruebe si su numero de paciente es correcto"
                                );
                            } else {
                                this.medical_patient = response.data;
                            }
                        });
                } else {
                    this.errors.push(
                        "El valor introducido debe ser un numero entero"
                    );
                }
            } else {
                this.errors.push("Debe llenar el campo");
            }
        },

        validarEntrada(entrada) {
            let valoresAceptados = /^[0-9]+$/;
            if (entrada.match(valoresAceptados)) {
                return true;
            } else {
                return false;
            }
        },

        async sincronizar() {
            this.medical_patient.paciente_id = this.currentUser.id;
            console.log(this.medical_patient);
            let res = await axios
                .post("/api/medicalPatients/update", this.medical_patient, {
                    headers: {
                        Authorization: `Bearer ${this.currentUser.token}`,
                    },
                })
                .then((response) => {
                    console.log(response.data);
                    if (response.status === 200) {
                        this.patient = response.data;
                    } else {
                        console.log("algo salio mal al registrar");
                    }
                })
                .catch((error) => {
                    console.log(error.response.data);
                });
        },
    },
};
</script>

<style>
.lista-groupo {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    border-radius: 0.25rem;
    background-color: #343a40 !important;
}
.lista-groupo-item {
    position: relative;
    display: block;
    padding: 0.75rem 1.25rem;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 10%;
    background-color: #343a40 !important;
    color: white !important;
    text-decoration: none;
}
.w-80 {
    width: 80% !important;
}
</style>
