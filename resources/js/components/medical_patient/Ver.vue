<template>
    <div>
        <template v-if="roleUser === true">
            <div class="col-12" v-if="medical_patient">
                <div class="table-reponsive ">
                    <table class="table table-dark rounded">
                        <tr>
                            <th>Numero de paciente</th>
                            <td>{{ medical_patient.id }}</td>
                        </tr>
                        <tr>
                            <th>Nombre del paciente</th>
                            <td>{{ medical_patient.name }}</td>
                        </tr>
                        <tr>
                            <th>Genero del paciente</th>
                            <td>{{ medical_patient.gender }}</td>
                        </tr>
                        <tr>
                            <th>Fecha de nacimiento del paciente</th>
                            <td>{{ medical_patient.date_of_birth }}</td>
                        </tr>
                        <tr>
                            <th>Direccion del paciente</th>
                            <td>{{ medical_patient.address }}</td>
                        </tr>
                        <tr>
                            <th>Numero de telefono del paciente</th>
                            <td>{{ medical_patient.phone }}</td>
                        </tr>
                        <tr>
                            <th>Peso del paciente (En Kilogramos)</th>
                            <td>{{ medical_patient.weight }}</td>
                        </tr>
                        <tr>
                            <th>Altura del paciente (En Metros)</th>
                            <td>{{ medical_patient.height }}</td>
                        </tr>
                    </table>

                    <router-link
                        type="button"
                        class="btn btn-primary btn-block"
                        to="/medicalPatients"
                        >Regresar</router-link
                    >
                </div>
            </div>
        </template>
        <template>
            <h1>Pagina no encontrada</h1>
        </template>
    </div>
</template>

<script>
import axios from "axios";
export default {
    name: "mostrarMedicalPatient",
    created() {
        axios
            .get(`/api/medicalPatients/${this.$route.params.id}`, {
                headers: {
                    Authorization: `Bearer ${this.currentUser.token}`
                }
            })
            .then(response => {
                this.medical_patient = response.data;
            });
    },
    data() {
        return {
            medical_patient: null
        };
    },
    computed: {
        currentUser() {
            return this.$store.getters.currentUser;
        }
    },
    methods: {
        roleUser() {
            if (this.currentUser.role === "doctor") {
                return true;
            } else {
                return false;
            }
        }
    }
};
</script>

<style></style>
