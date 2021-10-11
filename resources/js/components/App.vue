<template>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2 ">
            <a class="navbar-brand">
                <img
                    src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDY0IDY0IiB3aWR0aD0iNTE
                        yIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy
                        8xOTk5L3hsaW5rIj48bGluZWFyR3JhZGllbnQgaWQ9Ik5ld19HcmFkaWVudF9Td2F0Y2hfMyIgZ3JhZGllbnRVbml0c
                        z0idXNlclNwYWNlT25Vc2UiIHgxPSIzMiIgeDI9IjMyIiB5MT0iNjUuNTY0IiB5Mj0iNi4xMzkiPjxzdG9wIG9mZnNl
                        dD0iMCIgc3RvcC1jb2xvcj0iIzAwNmRmMCIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzAwZTdmMCIvPjw
                        vbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IGlkPSJOZXdfR3JhZGllbnRfU3dhdGNoXzMtMiIgeDE9IjQ3Lj
                        M4IiB4Mj0iNDcuMzgiIHhsaW5rOmhyZWY9IiNOZXdfR3JhZGllbnRfU3dhdGNoXzMiIHkxPSI2NS41NjQiIHkyPSI2Lj
                        EzOSIvPjxsaW5lYXJHcmFkaWVudCBpZD0iTmV3X0dyYWRpZW50X1N3YXRjaF8zLTMiIHgxPSIxNi42MiIgeDI9IjE2Lj
                        YyIiB4bGluazpocmVmPSIjTmV3X0dyYWRpZW50X1N3YXRjaF8zIiB5MT0iNjUuNTY0IiB5Mj0iNi4xMzkiLz48ZyBpZD0
                        iaGVhbHRoY2FyZS1jb3ZpZDE5LWNvcm9uYXZpcnVzLWhhbmQtaGVhcnRoIj48cGF0aCBkPSJtMzggMTNoLTN2LTNhMSAx
                        IDAgMCAwIC0xLTFoLTRhMSAxIDAgMCAwIC0xIDF2M2gtM2ExIDEgMCAwIDAgLTEgMXY0YTEgMSAwIDAgMCAxIDFoM3YzY
                        TEgMSAwIDAgMCAxIDFoNGExIDEgMCAwIDAgMS0xdi0zaDNhMSAxIDAgMCAwIDEtMXYtNGExIDEgMCAwIDAgLTEtMXptLTE
                        gNGgtM2ExIDEgMCAwIDAgLTEgMXYzaC0ydi0zYTEgMSAwIDAgMCAtMS0xaC0zdi0yaDNhMSAxIDAgMCAwIDEtMXYtM2gyd
                        jNhMSAxIDAgMCAwIDEgMWgzeiIgZmlsbD0idXJsKCNOZXdfR3JhZGllbnRfU3dhdGNoXzMpIi8+PHBhdGggZD0ibTU5Ljc
                        zIDE4LjM2YTQuNTc4IDQuNTc4IDAgMCAwIC4wMy0uNTMgNC4wMiA0LjAyIDAgMCAwIC0zLjE4LTMuOTEgNC4wNzEgNC4wN
                        zEgMCAwIDAgLTQuNyAyLjk3bC00LjQgMTIuNjZhMS42MzIgMS42MzIgMCAwIDAgLS4xOS4wOWwtOC44NCA1LjE4YTkuMDE
                        3IDkuMDE3IDAgMCAwIC00LjQ1IDcuNzZ2OS40MmExIDEgMCAwIDAgLTEgMXY4YTEgMSAwIDAgMCAxIDFoMTRhMSAxIDAgM
                        CAwIDEtMXYtOGExIDEgMCAwIDAgLTEtMXYtMi4yYTMuMDM5IDMuMDM5IDAgMCAxIDEtMi4yNGw2Ljc2LTYuMDFhNC45MzE
                        gNC45MzEgMCAwIDAgMS41Mi0yLjQ1bDQuMzQtMTYuMjNhMy45NTUgMy45NTUgMCAwIDAgLjE0LTEuMDQgNC4wMTkgNC4wM
                        TkgMCAwIDAgLTIuMDMtMy40N3ptLTUuOTQtLjg4YTIuMTEzIDIuMTEzIDAgMCAxIDIuMzgtMS42IDIgMiAwIDAgMSAxLjU
                        5IDEuOTV2LjAyYTQuMSA0LjEgMCAwIDAgLTMuODkgMy4wNmwtMi43OSA4LjYxYTQuMiA0LjIgMCAwIDAgLTEuMzQtLjM4e
                        m0tNi43OSA0Mi41MmgtMTJ2LTZoMTJ6bTEyLjY5LTM3LjY1LTQuMzUgMTYuMjRhMi45ODEgMi45ODEgMCAwIDEgLS45IDE
                        uNDZsLTYuNzcgNi4wMWE1LjA1NiA1LjA1NiAwIDAgMCAtMS42NyAzLjc0djIuMmgtMTB2LTkuNDJhNy4wNTIgNy4wNTIgM
                        CAwIDEgMy40Ni02LjA0bDguODMtNS4xN2EyIDIgMCAwIDEgMi43NC43MyAyLjA2IDIuMDYgMCAwIDEgLjIgMS41MiAyIDI
                        gMCAwIDEgLS45NCAxLjIxbC01LjczIDMuMzFhMSAxIDAgMCAwIDEgMS43M2w1LjczLTMuMzFhMy45NDggMy45NDggMCAwI
                        DAgMS44Ny0yLjQzIDQuMDA3IDQuMDA3IDAgMCAwIC0uNC0zLjAzbC0uMDYtLjA5IDMuMDktOS41M2EyLjExMyAyLjExMyA
                        wIDAgMSAyLjM4LTEuNiAyIDIgMCAwIDEgMS41OSAxLjk1IDEuNzIyIDEuNzIyIDAgMCAxIC0uMDcuNTJ6IiBmaWxsPSJ1c
                        mwoI05ld19HcmFkaWVudF9Td2F0Y2hfMy0yKSIvPjxwYXRoIGQ9Im0zMCA1MnYtOS40MmE5LjAxNyA5LjAxNyAwIDAgMCA
                        tNC40NS03Ljc2bC04Ljg0LTUuMTljLS4wNi0uMDMtLjEzLS4wNS0uMTktLjA4bC00LjM3LTEyLjU5YTQuMTA3IDQuMTA3I
                        DAgMCAwIC00LjczLTMuMDQgNC4wMiA0LjAyIDAgMCAwIC0zLjE4IDMuOTEgNC41NzggNC41NzggMCAwIDAgLjAzLjUzIDQ
                        uMDE5IDQuMDE5IDAgMCAwIC0yLjAzIDMuNDcgNC40MjEgNC40MjEgMCAwIDAgLjEzIDEuMDRsNC4zNSAxNi4yMmE0LjkxN
                        iA0LjkxNiAwIDAgMCAxLjUyIDIuNDZsNi43NSA2LjAxYTMuMDEyIDMuMDEyIDAgMCAxIDEuMDEgMi4yNHYyLjJhMSAxIDA
                        gMCAwIC0xIDF2OGExIDEgMCAwIDAgMSAxaDE0YTEgMSAwIDAgMCAxLTF2LThhMSAxIDAgMCAwIC0xLTF6bS0yMy43Ni0zN
                        C4xN2EyIDIgMCAwIDEgMS41OC0xLjk1IDIuMTYxIDIuMTYxIDAgMCAxIDIuNDIgMS42N2w0LjAyIDExLjU5YTQuMiA0LjI
                        gMCAwIDAgLTEuMzQuMzhsLTIuNzctOC41NmE0LjE0OSA0LjE0OSAwIDAgMCAtMy45MS0zLjExem0xMC4wOCAyOC4yMy02L
                        jc2LTYuMDFhMi45NjUgMi45NjUgMCAwIDEgLS45LTEuNDdsLTQuMzYtMTYuMjNhMi4xMjEgMi4xMjEgMCAwIDEgLS4wNi0
                        uNTIgMiAyIDAgMCAxIDEuNTgtMS45NSAyLjE0NCAyLjE0NCAwIDAgMSAyLjQxIDEuNjVsMy4wNyA5LjQ4LS4wNi4wOWE0L
                        jAwNyA0LjAwNyAwIDAgMCAtLjQgMy4wMyAzLjk0OCAzLjk0OCAwIDAgMCAxLjg3IDIuNDNsNS43MyAzLjMxYTEgMSAwIDA
                        gMCAxLTEuNzNsLTUuNzMtMy4zMWEyIDIgMCAwIDEgLS45NC0xLjIxIDIuMDYgMi4wNiAwIDAgMSAuMi0xLjUyIDIgMiAwI
                        DAgMSAyLjczLS43NGw4Ljg0IDUuMThhNy4wNTIgNy4wNTIgMCAwIDEgMy40NiA2LjA0djkuNDJoLTEwdi0yLjJhNS4wMyA
                        1LjAzIDAgMCAwIC0xLjY4LTMuNzR6bTEyLjY4IDEzLjk0aC0xMnYtNmgxMnoiIGZpbGw9InVybCgjTmV3X0dyYWRpZW50X
                        1N3YXRjaF8zLTMpIi8+PHBhdGggZD0ibTQ2LjE0NyA1LjEzMmE5Ljk5NCA5Ljk5NCAwIDAgMCAtMTQuMTQ3LjAwMSA5Ljk
                        5MiA5Ljk5MiAwIDAgMCAtMTQuMTQ2IDAgMTAuMDA1IDEwLjAwNSAwIDAgMCAwIDE0LjEzNGwxMy40NCAxMy40NGExIDEgM
                        CAwIDAgMS40MTQgMGwxMy40NC0xMy40NGExMC4wMDYgMTAuMDA2IDAgMCAwIC0uMDAxLTE0LjEzNXptLTE0LjE0NyAyNS4
                        0NTQtMTIuNzMzLTEyLjczM2E4IDggMCAwIDEgNS42NjMtMTMuNjUzIDcuOTE2IDcuOTE2IDAgMCAxIDUuNjUzIDIuMzQ3b
                        C43MS43MWExIDEgMCAwIDAgMS40MTQgMGwuNzEyLS43MTJhNy45OTMgNy45OTMgMCAwIDEgMTEuMzE0IDAgOCA4IDAgMCA
                        xIDAgMTEuMzA2eiIgZmlsbD0idXJsKCNOZXdfR3JhZGllbnRfU3dhdGNoXzMpIi8+PC9nPjwvc3ZnPg=="
                    width="30"
                    height="30"
                />
            </a>
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

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
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
                        <li class="nav-item active">
                            <router-link
                                exact-active-class="active"
                                class="nav-link"
                                to="/medicalPatients"
                                >Pacientes</router-link
                            >
                        </li>
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
                                <a @click.prevent="logout" class="dropdown-item"
                                    >Logout <i class="bi bi-box-arrow-right"></i
                                ></a>
                            </div>
                        </li>
                    </template>
                </ul>
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

<style></style>
