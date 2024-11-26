<script setup>
</script>

<template>
  <template>
    <div class="bg-gray-100 min-h-screen">
      <AppHeader />
      <div class="container mx-auto px-4 py-6">
        <section>
          <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <slot/>
          </div>
        </section>
      </div>
    </div>
  </template>

</template>

<style></style>