<script>
</script>

<template>

  <UCard>
    <div>
      <div>
        <div class="flex justify-end">
          <UBadge>124</UBadge>
        </div>
        <div class="my-4">
          <h3 class="text-2xl font-bold">Operation Name</h3>
          <p class="mt-2 text-xs text-gray-600">'076c740d-60f2-4333-83b4-56739366febd'</p>
        </div>

        <h3 class="my-2  text-md font-bold">Sub-operations</h3>
        <div class="flex flex-wrap items-center justify-start">
          <UBadge class="my-1 mr-1" variant="soft">Sub operation 1</UBadge>
          <UBadge class="my-1 mr-1" variant="soft">Sub operation 3</UBadge>
          <UBadge class="my-1 mr-1" variant="soft">Sub operation 1213</UBadge>
          <UBadge class="my-1 mr-1" variant="soft">Sub operation 45</UBadge>
          <UBadge class="my-1" variant="soft">...</UBadge>
        </div>
      </div>
    </div>
    <template #footer>
      <div class="h-8 flex justify-center items-center">
        <UButton
            to="/operations/1"
            icon="i-heroicons-eye-16-solid"
            size="sm"
            color="primary"
            variant="ghost"
            class="m-2"
        />
        <UButton
            to="/operations/1/edit"
            icon="i-heroicons-pencil-16-solid"
            size="sm"
            color="primary"
            variant="ghost"
            class="m-2"
        />
        <UButton
            icon="i-heroicons-trash-16-solid"
            size="sm"
            color="primary"
            variant="ghost"
            class="m-2"
        />
        <UButton
            icon="i-heroicons-arrow-path-16-solid"
            size="sm"
            color="primary"
            variant="ghost"
            class="m-2"
        />
      </div>
    </template>
  </UCard>

</template>

<style>
</style>