<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/home" class="nav-item nav-link">Home</router-link>
                    <router-link to="/alleFirmen" class="nav-item nav-link">Firmen List</router-link>
                    <router-link to="/createFirma" class="nav-item nav-link">Neue Firma</router-link>
                    <router-link to="/alleMitarbeiter" class="nav-item nav-link">Mitarbeiter List</router-link>
                    <router-link to="/createMitarbeiter" class="nav-item nav-link">Neue Mitarbeiter</router-link>
                </div>
            </div>
        </nav>

        <router-view> </router-view>
    </div>
</template>

<script>
export default {}
</script>
