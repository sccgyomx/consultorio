<template>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <template v-if="encontrado">
                    <h1 class="display-5 text-center">
                        Registro de datos vitales
                    </h1>
                    <form @submit.prevent="crear">
                        <div class="row">
                            <div class="col-12 md-2">
                                <div class="form-group">
                                    <div class="row-1" v-if="errors.length > 0">
                                        <div class="w-97">
                                            <ul class="errors-danger">
                                                <li
                                                    v-for="error in errors"
                                                    :key="error.id"
                                                >
                                                    {{ error }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row-1">
                                        <label>Precion</label>
                                        <div class="col-sm">
                                            <input
                                                type="text"
                                                class="form-control"
                                                v-model="
                                                    healtCondition.systolic_pressure
                                                "
                                            />
                                        </div>
                                        <label>/</label>
                                        <div class="col-sm">
                                            <input
                                                type="text"
                                                class="form-control"
                                                v-model="
                                                    healtCondition.diastolic_pressure
                                                "
                                            />
                                        </div>
                                    </div>
                                    <div class="row-1">
                                        <label>Saturacion de oxigeno</label>
                                        <div class="col-sm">
                                            <input
                                                type="text"
                                                class="form-control"
                                                v-model="
                                                    healtCondition.oxigen_saturation
                                                "
                                            />
                                        </div>
                                    </div>
                                    <div class="row-1">
                                        <label>Temperatura corporal</label>
                                        <div class="col-sm">
                                            <input
                                                type="text"
                                                class="form-control"
                                                v-model="
                                                    healtCondition.temperature
                                                "
                                            />
                                        </div>
                                    </div>
                                    <div class="row-1">
                                        <label
                                            >Glucosa en ayunas
                                            (Preprandial)</label
                                        >
                                        <div class="col-sm">
                                            <input
                                                type="text"
                                                class="form-control"
                                                v-model="
                                                    healtCondition.fasting_glucose
                                                "
                                            />
                                        </div>
                                    </div>
                                    <div class="row-1">
                                        <label
                                            >Glucosa despues de una comida
                                            (Postprandial)</label
                                        >
                                        <div class="col-sm">
                                            <input
                                                type="text"
                                                class="form-control"
                                                v-model="
                                                    healtCondition.postprandial_glucose
                                                "
                                            />
                                        </div>
                                    </div>
                                    <div class="row-2">
                                        <label>
                                            Observaciones
                                        </label>
                                        <div class="col-sm">
                                            <textarea
                                                class="form-control"
                                                rows="3"
                                                v-model="
                                                    healtCondition.description
                                                "
                                            ></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="w-97">
                        <button
                            @click="enviarDatos"
                            type="button"
                            class="btn btn-success btn-block"
                        >
                            Guardar datos
                        </button>
                    </div>
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
            encontrado: null,
            activo: false,
            errors: []
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
    },
    methods: {
        enviarDatos() {
            this.errors = [];
            this.healtCondition.medical_patients_id = this.medical_patient.id;
            this.validarDatos();
            if (this.errors.length === 0) {
                axios
                    .post("/api/healtConditions/new", this.healtCondition, {
                        headers: {
                            Authorization: `Bearer ${this.currentUser.token}`
                        }
                    })
                    .then(response => {
                        if (this.currentUser.role === "doctor") {
                            this.$router.push("/medicalPatients");
                        } else {
                            this.$router.push("/");
                        }
                    })
                    .catch(error => {
                        console.log(error.response.data);
                    });
            }
        },
        validarDatos() {
            if (this.healtCondition.description === "") {
                this.errors.push("El campo observaciones esta vacio");
            }
            if (this.healtCondition.systolic_pressure === "") {
                this.errors.push("El campo superior de precion esta vacio");
            }
            if (this.healtCondition.diastolic_pressure === "") {
                this.errors.push("El campo superior de precion esta vacio");
            }
            if (this.healtCondition.oxigen_saturation === "") {
                this.errors.push("El campo saturacion de oxigeno esta vacio");
            }
            if (this.healtCondition.temperature === "") {
                this.errors.push("El campo temperatura corporal esta vacio");
            }
            if (this.healtCondition.fasting_glucose === "") {
                this.errors.push("El campo glucosa preprandial esta vacio");
            }
            if (this.healtCondition.postprandial_glucose === "") {
                this.errors.push("El campo glucosa postprandial esta vacio");
            }
        }
    }
};
</script>

<style>
.row-1 {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 0.5rem !important;
    align-items: flex-end;
}
.row-2 {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 0.5rem !important;
    align-items: center;
}
.w-97 {
    width: 97%;
}
.errors-danger {
    color: #761b18;
    background-color: #f9d6d5;
    border: 1px solid;
    border-color: #f7c6c5;
    border-radius: 5px;
    padding-right: 15px;
}
</style>
