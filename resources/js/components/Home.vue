<template>
    <div>
        <h2 class="text-center">Home</h2>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Firma</th>
                <th>Mitarbeitern</th>

            </tr>
            </thead>
            <tbody>
            <tr v-for="firmen in firmens" :key="firmen.id">
                <td>{{ firmen.id }}</td>
                <td>{{ firmen.firmenname }}</td>
                <td> {{ firmen.mitarbeiten.map(mitarbeiter=> mitarbeiter.vorname ).join(", ") }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            firmens: [],
            mitarbeiters: []
        }
    },
    created() {
        this.axios
            .get('http://localhost:8000/api/firmens/')
            .then(response => {
                this.firmens = response.data;
            });

    }
}
</script>
