<x-print-layout
  type="module_names.documents.label"
  name="{{ $record->attachment }}"
  route="{{ route('filament.admin.resources.documents.view', $record->id) }}"
  >
</x-print-layout>
