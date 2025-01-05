<div>
    ID: {{ $this->id }}

    <div>
        {{ route('decrypt', [
            'id' => $this->id,
            'key' => $this->key,
        ]) }}
    </div>
</div>
