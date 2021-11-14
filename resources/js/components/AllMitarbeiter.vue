<template>
    <div>
        <h2 class="text-center">Mitarbeiter Liste</h2>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Email</th>
                <th>Firma ID</th>
                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="mitarbeiter in mitarbeiters" :key="mitarbeiter.id">
                <td>{{ mitarbeiter.id }}</td>
                <td>{{ mitarbeiter.vorname }}</td>
                <td>{{ mitarbeiter.nachname }}</td>
                <td>{{ mitarbeiter.email }}</td>
                <td>{{ mitarbeiter.firmen_id }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{vorname: 'edit', params: { id: mitarbeiter.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteFirma(mitarbeiter.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            mitarbeiters: []
        }
    },
    created() {
        this.axios
            .get('http://localhost:8000/api/mitarbeiters/')
            .then(response => {
                this.mitarbeiters = response.data;
            });
    },
    methods: {
        deleteFirma(id) {
            this.axios
                .delete(`http://localhost:8000/api/mitarbeiters/${id}`)
                .then(response => {
                    let i = this.mitarbeiters.map(data => data.id).indexOf(id);
                    this.mitarbeiters.splice(i, 1)
                });
        }
    }
}
</script>
