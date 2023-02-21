<template>
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <Link
                        href="/"
                        :class="{
                            active: $page.url.startsWith('/admin/dashboard'),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        Dashboard
                    </Link>
                    <div class="sb-sidenav-menu-heading">Modul</div>
                    <Link
                        href="/post"
                        :class="{
                            active: $page.url.startsWith('/post'),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        Postingan
                    </Link>
                    <Link
                        href="/draft"
                        :class="{
                            active: $page.url.startsWith('/draft'),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fa fa-archive"></i>
                        </div>
                        Draft Postingan
                    </Link>
                    <Link
                        href="/admin/lesson"
                        :class="{
                            active: $page.url.startsWith('/admin/lesson'),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-columns"></i>
                        </div>
                        Kategori
                    </Link>
                    <Link
                        href="/admin/lesson"
                        :class="{
                            active: $page.url.startsWith('/admin/lesson'),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-chart-area"></i>
                        </div>
                        Tag
                    </Link>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <Link
                        href="/hero"
                        :class="{
                            active: $page.url.startsWith('/hero'),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fa fa-list-ul"></i>
                        </div>
                        Pengumuman
                    </Link>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },
};
</script>
