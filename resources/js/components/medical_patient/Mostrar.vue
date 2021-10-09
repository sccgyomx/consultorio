<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-2 mt-2">
                <a
                    type="button"
                    @click="crearMP"
                    class="btn btn-success my-2 my-sm-0"
                >
                    <i class="bi bi-plus-circle" style="font-size: 1rem;"></i>
                </a>
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
                            <tr
                                v-for="medical_patient in medical_patients"
                                :key="medical_patient.id"
                            >
                                <td>{{ medical_patient.id }}</td>
                                <td>{{ medical_patient.nombre }}</td>
                                <td>
                                    <router-link
                                        :to="{
                                            name: editarMedicalPatient,
                                            params: { id: medical_patient.id }
                                        }"
                                        class="btn btn-outline-success my-2 my-sm-0"
                                    >
                                        <i
                                            class="bi bi-pencil"
                                            style="font-size: 1rem;"
                                        ></i>
                                    </router-link>
                                    <a
                                        class="btn btn-outline-danger"
                                        type="button"
                                        @click="
                                            deleteMedical_patient(
                                                medical_patient.id
                                            )
                                        "
                                    >
                                        <i
                                            class="bi bi-trash"
                                            style="font-size: 1rem;"
                                        ></i>
                                    </a>
                                </td>
                            </tr>
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
    data: {
        medical_patients: []
    },
    mounted() {
        this.mostrarMedicalPatients();
    },
    methods: {
        async mostrarMedicalPatients() {
            await this.axios
                .get("/api/medical_patient")
                .then((this.medical_patients = Response.data))
                .catch(error => {
                    this.medical_patients = [];
                });
        },
        deleteMedical_patient(id) {
            if (confirm("¿Seguro desea eliminar el registro?")) {
                this.axios
                    .delete(`/api/medical_patient/${id}`)
                    .then(this.mostrarMedicalPatients())
                    .catch(error => {
                        console.log(error);
                    });
            }
        },
        crearMP() {
            this.$router.push("/crearMedicalPatients");
        }
    }
};
</script>

<style></style>
