<template>
    <div class="container">
        <div class="container" v-if="currentUser.role === 'doctor'">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="display-5">Listado de acciones</h1>
                        </div>
                        <div class="card-body">
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
            </div>
        </div>

        <!-- logica para el paciente -->
        <div class="container" v-if="currentUser.role === 'patient'">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <template v-if="patient">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="display-5">Datos del paciente</h1>
                            </div>
                            <div class="card-body">
                                <div class="table-reponsive ">
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
                                            <th>
                                                Fecha de nacimiento del paciente
                                            </th>
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
                                            <th>
                                                Numero de telefono del paciente
                                            </th>
                                            <td>
                                                {{ patient.phone }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Peso del paciente (En
                                                Kilogramos)
                                            </th>
                                            <td>
                                                {{ patient.weight }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Altura del paciente (En Metros)
                                            </th>
                                            <td>
                                                {{ patient.height }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </template>
                    <template v-else>
                        <div class="card">
                            <div class="card-header"></div>
                            <div class="card-body"></div>
                        </div>
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
                    Authorization: `Bearer ${this.currentUser.token}`
                }
            })
            .then(response => {
                this.patient = response.data;
            });
    },
    data() {
        return {
            patient: null
        };
    },
    computed: {
        currentUser() {
            // console.log(this.$store.getters.currentUser);
            return this.$store.getters.currentUser;
        }
    }
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
</style>
