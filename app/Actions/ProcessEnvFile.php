<?php

namespace App\Actions;

class ProcessEnvFile
{
    public function sanitize(#[\SensitiveParameter] string $fileContents, bool $includeComments = false): string
    {
        $lines = collect(explode("\n", $fileContents));

        if (! $includeComments) {
            $lines = $lines->filter($this->filterOutCommentedLines(...));
        }

        return $lines->implode("\n");
    }

    private function filterOutCommentedLines(string $line): bool
    {
        if (str_starts_with(ltrim($line), '#')) {
            return false;
        }

        return true;
    }
}
