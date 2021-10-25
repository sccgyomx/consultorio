<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <template v-if="encontrado">
                    <h1 class="display-5 text-center">
                        Registro de datos vitales
                    </h1>
                    <form @submit.prevent="crear">
                        <div class="row">
                            <div class="col-12 md-2">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model="
                                            healtCondition.medical_patients_id
                                        "
                                        placeholder="Nombre"
                                    />
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- <div class="alert alert-danger mt-4" v-if="errors">
                    <ul></ul>
                </div> -->
                </template>
                <template v-else>
                    <h1 class="display-5 text-center">
                        Paciente no encontrado
                    </h1>
                </template>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "healtConditions",
    data() {
        return {
            healtCondition: {
                description: "",
                systolic_pressure: "",
                diastolic_pressure: "",
                oxigen_saturation: "",
                temperature: "",
                fasting_glucose: "",
                postprandial_glucose: "",
                medical_patients_id: ""
            },
            medical_patient: {},
            encontrado: null
        };
    },
    created() {
        axios
            .get(`/api/medicalPatients/${this.$route.params.id}`, {
                headers: {
                    Authorization: `Bearer ${this.currentUser.token}`
                }
            })
            .then(response => {
                this.medical_patient = response.data;
                if (this.currentUser.role === "doctor") {
                    if (this.medical_patient.id === undefined) {
                        this.encontrado = false;
                    } else {
                        this.encontrado = true;
                    }
                } else {
                    if (
                        this.medical_patient.paciente_id == this.currentUser.id
                    ) {
                        this.encontrado = true;
                    } else {
                        this.encontrado = false;
                    }
                }
            });
    },
    computed: {
        currentUser() {
            // console.log(this.$store.getters.currentUser);
            return this.$store.getters.currentUser;
        }
    }
};
</script>

<style></style>
