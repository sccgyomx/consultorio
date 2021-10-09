<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Nuevo paciente</div>
                    <div class="card-body">
                        <form @submit.prevent="crear">
                            <div class="row">
                                <div class="col-12 md-2">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            v-model="medicalPatient.name"
                                            placeholder="Nombre"
                                        />
                                    </div>
                                </div>
                                <div class="col-12 md-2">
                                    <div class="form-group">
                                        <label>Edad</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            v-model="medicalPatient.age"
                                            placeholder="Edad"
                                        />
                                    </div>
                                </div>
                                <div class="col-12 md-2">
                                    <div class="form-group">
                                        <label>Genero</label>
                                        <select
                                            class="form-control"
                                            v-model="medicalPatient.gender"
                                        >
                                            <option value="Masculino"
                                                >Masculino</option
                                            >
                                            <option value="Femenino"
                                                >Femenino</option
                                            >
                                            <option value="No binario"
                                                >No binario</option
                                            >
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 md-2">
                                    <div class="form-group">
                                        <label>Fecha de nacimiento</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            v-model="
                                                medicalPatient.date_of_birth
                                            "
                                            placeholder="1997-11-29"
                                        />
                                    </div>
                                </div>
                                <div class="col-12 md-2">
                                    <div class="form-group">
                                        <label>Dirección</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            v-model="medicalPatient.address"
                                            placeholder="Dirección"
                                        />
                                    </div>
                                </div>
                                <div class="col-12 md-2">
                                    <div class="form-group">
                                        <label>Numero de telefono</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            v-model="medicalPatient.phone"
                                            placeholder="Telefono"
                                        />
                                    </div>
                                </div>
                                <div class="col-12 md-2">
                                    <div class="form-group">
                                        <label>Peso</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            v-model="medicalPatient.weight"
                                            placeholder="20 kg"
                                        />
                                    </div>
                                </div>
                                <div class="col-12 md-2">
                                    <div class="form-group">
                                        <label>Altura</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            v-model="medicalPatient.height"
                                            placeholder="1.7 mts"
                                        />
                                    </div>
                                </div>
                                <div class="col-12 md-2">
                                    <button
                                        type="submit"
                                        class="btn btn-success"
                                    >
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "crearMedicalPatients",
    data() {
        return {
            medicalPatient: {
                name: "",
                age: "",
                gender: "",
                date_of_birth: "",
                address: "",
                phone: "",
                weight: "",
                height: ""
            }
        };
    },
    methods: {
        crear() {
            console.log(this.medicalPatient);
        }
    }
};
</script>

<style></style>
