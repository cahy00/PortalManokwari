<template>
    <div class="col-md-6">
        <div class="card-body">
            <h5><i class="fa fa-bookmark"></i> Daftar Kategori</h5>
            <hr />
            <table id="datatablesSimple" class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="data in category" :key="data.id">
                        <td>{{ data.id }}</td>
                        <td>{{ data.title }}</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import Layout from "../../../Layouts/Layout.vue";

export default {
    props: {
        category: Object,
    },
};
</script>
