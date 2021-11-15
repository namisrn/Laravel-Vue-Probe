<template>
    <div>
        <h2 class="text-center">Firmen Liste</h2>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Firma</th>
                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="firmen in firmens" :key="firmen.id">
                <td>{{ firmen.id }}</td>
                <td>{{ firmen.firmenname }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{firmenname: 'edit', params: { id: firmen.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteFirma(firmen.id)">Delete</button>
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
            firmens: []
        }
    },
    created() {
        this.axios
            .get('http://localhost:8000/api/firmens/')
            .then(response => {
                this.firmens = response.data;
            });
    },
    methods: {
        deleteFirma(id) {
            this.axios
                .delete(`http://localhost:8000/api/firmens/${id}`)
                .then(response => {
                    let i = this.firmens.map(data => data.id).indexOf(id);
                    this.firmens.splice(i, 1)
                });
        }

    }
}
</script>
