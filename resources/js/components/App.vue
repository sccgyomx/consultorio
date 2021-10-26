<template>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2 ">
            <div class="container">
                <span class="navbar-text">
                    <h4>Seguimiento pacientes covid-19</h4>
                </span>

                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div
                class="collapse navbar-collapse justify-content-end"
                id="navbarSupportedContent"
            >
                <div class="container justify-content-end">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item active">
                            <router-link
                                exact-active-class="active"
                                class="nav-link"
                                to="/"
                                >Inicio</router-link
                            >
                        </li>

                        <template v-if="!currentUser">
                            <li class="nav-item active">
                                <router-link
                                    exact-active-class="active"
                                    class="nav-link"
                                    to="/login"
                                    >Login</router-link
                                >
                            </li>
                            <li class="nav-item active">
                                <router-link
                                    exact-active-class="active"
                                    class="nav-link"
                                    to="/register"
                                    >Register</router-link
                                >
                            </li>
                        </template>
                        <template v-else>
                            <li class="nav-item dropdown">
                                <a
                                    id="navbarDropdown"
                                    class="nav-link dropdown-toggle"
                                    role="button"
                                    aria-expanded="false"
                                    aria-haspopup="true"
                                    data-toggle="dropdown"
                                >
                                    {{ currentUser.name }}
                                    <span class="carret"></span>
                                </a>

                                <div
                                    class="dropdown-menu"
                                    aria-labelledby="navbarDropdown"
                                >
                                    <a
                                        @click.prevent="logout"
                                        class="dropdown-item"
                                        >Logout
                                        <i class="bi bi-box-arrow-right"></i
                                    ></a>
                                </div>
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
        </nav>
        <div>
            <router-view></router-view>
        </div>
    </main>
</template>

<script>
export default {
    name: "App",
    methods: {
        logout() {
            this.$store.commit("logout");
            this.$router.push("/login");
        }
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
body {
    background-color: white;
}
</style>
