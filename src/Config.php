<?php
declare(strict_types=1);

namespace Fyre\PhpCsFixer;

/**
 * Config
 */
class Config extends \PhpCsFixer\Config
{
    /**
     * New Config constructor.
     */
    public function __construct()
    {
        parent::__construct('fyre');

        $this->setRules([
            '@PSR12' => true,
            'align_multiline_comment' => true,
            'array_syntax' => true,
            'binary_operator_spaces' => [
                'default' => 'single_space',
            ],
            'blank_line_after_opening_tag' => false,
            'cast_spaces' => true,
            'class_attributes_separation' => [
                'elements' => [
                    'case' => 'none',
                    'const' => 'only_if_meta',
                    'method' => 'one',
                    'property' => 'only_if_meta',
                    'trait_import' => 'none',
                ],
            ],
            'class_reference_name_casing' => true,
            'concat_space' => true,
            'elseif' => false,
            'fully_qualified_strict_types' => [
                'import_symbols' => true,
            ],
            'function_declaration' => [
                'closure_fn_spacing' => 'none',
                'closure_function_spacing' => 'none',
            ],
            'linebreak_after_opening_tag' => true,
            'list_syntax' => true,
            'magic_constant_casing' => true,
            'magic_method_casing' => true,
            'native_function_casing' => true,
            'native_type_declaration_casing' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_empty_comment' => true,
            'no_null_property_initialization' => true,
            'no_short_bool_cast' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_superfluous_elseif' => true,
            'no_trailing_comma_in_singleline' => true,
            'no_unused_imports' => true,
            'no_useless_else' => true,
            'no_useless_return' => true,
            'nullable_type_declaration' => [
                'syntax' => 'union',
            ],
            'ordered_class_elements' => [
                'order' => [
                    'use_trait',
                    'case',
                    'constant_public',
                    'constant_protected',
                    'constant_private',
                    'property_public_static',
                    'property_protected_static',
                    'property_private_static',
                    'property_public',
                    'property_protected',
                    'property_private',
                    'construct',
                    'destruct',
                    'magic',
                    'method_public_static',
                    'method_protected_static',
                    'method_private_static',
                    'method_public',
                    'method_protected',
                    'method_private',
                    'phpunit',
                ],
                'sort_algorithm' => 'alpha',
            ],
            'ordered_imports' => [
                'imports_order' => ['class', 'function', 'const'],
                'sort_algorithm' => 'alpha',
            ],
            'ordered_types' => [
                'null_adjustment' => 'always_last',
            ],
            'phpdoc_indent' => true,
            'phpdoc_order' => [
                'order' => ['param', 'return', 'throws'],
            ],
            'phpdoc_param_order' => true,
            'phpdoc_trim' => true,
            'phpdoc_types' => true,
            'semicolon_after_instruction' => true,
            'single_quote' => true,
            'space_after_semicolon' => [
                'remove_in_empty_for_expressions' => true,
            ],
            'trailing_comma_in_multiline' => true,
            'trim_array_spaces' => true,
            'whitespace_after_comma_in_array' => [
                'ensure_single_space' => true,
            ],
        ]);
    }
}
