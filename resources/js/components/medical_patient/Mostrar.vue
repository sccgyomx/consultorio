<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-2 mt-2">
                <div class="container text-center ">
                    <h1 class="display-5 ">lista de paciente</h1>
                </div>

                <router-link
                    type="button"
                    to="/medicalPatients/new"
                    class="btn btn-success my-2 my-sm-0"
                    ><i class="bi bi-plus-circle" style="font-size: 1rem;"></i
                ></router-link>
            </div>
            <div class="col-12">
                <div class="table-reponsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-if="!medical_patients">
                                <tr>
                                    <td colspan="3" class="text-center">
                                        No hay pacientes
                                    </td>
                                </tr>
                            </template>
                            <template v-else>
                                <tr
                                    v-for="medical_patient in medical_patients"
                                    :key="medical_patient.id"
                                >
                                    <td>{{ medical_patient.id }}</td>
                                    <td>{{ medical_patient.name }}</td>
                                    <td>
                                        <router-link
                                            :to="
                                                `/medicalPatients/${medical_patient.id}`
                                            "
                                            class="btn btn-outline-success my-2 my-sm-0"
                                        >
                                            <i class="bi bi-eye"></i>
                                            Ver
                                        </router-link>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "mostrarMedicalPatients",
    mounted() {
        // this.medicalPatients();
        this.$store.dispatch("getMedicalPatients");
    },
    methods: {
        deleteMedical_patient(id) {
            // if (confirm("¿Seguro desea eliminar el registro?")) {
            //     this.axios
            //         .delete(`/api/medical_patient/${id}`)
            //         .then(this.mostrarMedicalPatients())
            //         .catch(error => {
            //             console.log(error);
            //         });
            // }
        }
        // crearMP() {
        //     this.$router.push("/crearMedicalPatients");
        // }
    },
    computed: {
        medical_patients() {
            return this.$store.getters.medical_patients;
        }
    }
};
</script>

<style></style>
