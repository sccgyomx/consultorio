<template>
    <div class="container">
        <div class="login row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Inicio de sesion
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="authenticate">
                            <div class="form-group row">
                                <label for="email">Correo electronico</label>
                                <input
                                    type="email"
                                    v-model="form.email"
                                    class="form-control"
                                    placeholder="Correo Electronico"
                                />
                            </div>
                            <div class="form-group row">
                                <label for="password">Contraseña</label>
                                <input
                                    type="password"
                                    v-model="form.password"
                                    class="form-control"
                                    placeholder="Contraseña"
                                />
                            </div>
                            <div class="form-group row">
                                <button
                                    type="submit"
                                    class="btn btn-success btn-block"
                                >
                                    Iniciar sesion
                                </button>
                            </div>
                            <div class="form-group row" v-if="authError">
                                <p class="error">{{ authError }}</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { login } from "../../helpers/auth";
export default {
    name: "login",
    data() {
        return {
            form: {
                email: "",
                password: ""
            },
            error: null
        };
    },
    methods: {
        authenticate() {
            this.$store.dispatch("login");

            login(this.form)
                .then(res => {
                    this.$store.commit("loginSuccess", res);
                    this.$router.push("/");
                })
                .catch(error => {
                    this.$store.commit("loginFailed", { error });
                });
        }
    },
    computed: {
        authError() {
            return this.$store.getters.authError;
        }
    }
};
</script>

<style>
.error {
    text-align: center;
    color: brown;
}
</style>
