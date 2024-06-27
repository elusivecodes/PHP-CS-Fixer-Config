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

        $this->setRiskyAllowed(true);
        $this->setRules([
            'align_multiline_comment' => true,
            'array_indentation' => true,
            'array_syntax' => ['syntax' => 'short'],
            'binary_operator_spaces' => [
                'default' => 'single_space',
            ],
            'blank_line_after_namespace' => true,
            'blank_line_after_opening_tag' => false,
            'blank_line_before_statement' => [
                'statements' => [
                    'continue',
                    'return',
                ],
            ],
            'blank_line_between_import_groups' => true,
            'blank_lines_before_namespace' => true,
            'braces_position' => [
                'allow_single_line_anonymous_functions' => true,
                'allow_single_line_empty_anonymous_classes' => true,
                'anonymous_classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
                'anonymous_functions_opening_brace' => 'same_line',
                'classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
                'control_structures_opening_brace' => 'same_line',
                'functions_opening_brace' => 'next_line_unless_newline_at_signature_end',
            ],
            'cast_spaces' => true,
            'class_attributes_separation' => [
                'elements' => [
                    'case' => 'none',
                    'const' => 'one',
                    'method' => 'one',
                    'property' => 'one',
                    'trait_import' => 'none',
                ],
            ],
            'class_definition' => [
                'inline_constructor_arguments' => false,
                'multi_line_extends_each_single_line' => true,
                'single_item_single_line' => true,
                'single_line' => true,
                'space_before_parenthesis' => true,
            ],
            'class_reference_name_casing' => true,
            'clean_namespace' => true,
            'compact_nullable_type_declaration' => true,
            'concat_space' => [
                'spacing' => 'none',
            ],
            'constant_case' => ['case' => 'lower'],
            'control_structure_braces' => true,
            'control_structure_continuation_position' => [
                'position' => 'same_line',
            ],
            'declare_equal_normalize' => true,
            'elseif' => false,
            'encoding' => true,
            'full_opening_tag' => true,
            'fully_qualified_strict_types' => [
                'import_symbols' => true,
            ],
            'function_declaration' => [
                'closure_fn_spacing' => 'none',
                'closure_function_spacing' => 'none',
            ],
            'general_phpdoc_tag_rename' => true,
            'heredoc_to_nowdoc' => true,
            'include' => true,
            'increment_style' => ['style' => 'post'],
            'indentation_type' => true,
            'integer_literal_case' => true,
            'lambda_not_used_import' => true,
            'line_ending' => true,
            'linebreak_after_opening_tag' => true,
            'list_syntax' => true,
            'lowercase_cast' => true,
            'lowercase_keywords' => true,
            'lowercase_static_reference' => true,
            'magic_constant_casing' => true,
            'magic_method_casing' => true,
            'method_argument_space' => [
                'attribute_placement' => 'ignore',
                'on_multiline' => 'ensure_fully_multiline',
            ],
            'method_chaining_indentation' => true,
            'multiline_whitespace_before_semicolons' => [
                'strategy' => 'no_multi_line',
            ],
            'native_function_casing' => true,
            'native_type_declaration_casing' => true,
            'new_with_parentheses' => true,
            'no_alias_language_construct_call' => true,
            'no_alternative_syntax' => true,
            'no_binary_string' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_break_comment' => true,
            'no_closing_tag' => true,
            'no_empty_comment' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_extra_blank_lines' => [
                'tokens' => [
                    'extra',
                    'throw',
                    'use',
                ],
            ],
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_mixed_echo_print' => [
                'use' => 'echo',
            ],
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_multiple_statements_per_line' => true,
            'no_null_property_initialization' => true,
            'no_short_bool_cast' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_space_around_double_colon' => true,
            'no_spaces_after_function_name' => true,
            'no_spaces_around_offset' => [
                'positions' => ['inside', 'outside'],
            ],
            'no_superfluous_elseif' => true,
            'no_superfluous_phpdoc_tags' => [
                'allow_mixed' => true,
                'allow_unused_params' => true,
            ],
            'no_trailing_comma_in_singleline' => true,
            'no_trailing_whitespace' => true,
            'no_trailing_whitespace_in_comment' => true,
            'no_unneeded_control_parentheses' => [
                'statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield'],
            ],
            'no_unneeded_braces' => true,
            'no_unused_imports' => true,
            'no_useless_else' => true,
            'no_useless_return' => true,
            'no_whitespace_before_comma_in_array' => true,
            'no_whitespace_in_blank_line' => true,
            'normalize_index_brace' => true,
            'nullable_type_declaration' => [
                'syntax' => 'union',
            ],
            'nullable_type_declaration_for_default_null_value' => true,
            'object_operator_without_whitespace' => true,
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
                    'method_public_static',
                    'construct',
                    'destruct',
                    'magic',
                    'method_public',
                    'method_protected',
                    'method_private',
                    'method_protected_static',
                    'method_private_static',
                    'phpunit',
                ],
                'sort_algorithm' => 'alpha',
            ],
            'ordered_imports' => [
                'imports_order' => ['class', 'function', 'const'],
                'sort_algorithm' => 'alpha',
            ],
            'ordered_interfaces' => true,
            'ordered_traits' => true,
            'ordered_types' => [
                'null_adjustment' => 'always_last',
            ],
            'phpdoc_add_missing_param_annotation' => [
                'only_untyped' => false,
            ],
            'phpdoc_align' => [
                'align' => 'left',
            ],
            'phpdoc_indent' => true,
            'phpdoc_inline_tag_normalizer' => true,
            'phpdoc_no_access' => true,
            'phpdoc_no_package' => true,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_order' => [
                'order' => ['param', 'return', 'throws'],
            ],
            'phpdoc_param_order' => true,
            'phpdoc_scalar' => true,
            'phpdoc_separation' => [
                'groups' => [
                    ['deprecated', 'link', 'see', 'since'],
                    ['author', 'copyright', 'license'],
                    ['category', 'package', 'subpackage'],
                    ['property', 'property-read', 'property-write'],
                    ['param', 'return'],
                ],
            ],
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_summary' => false,
            'phpdoc_tag_type' => [
                'tags' => [
                    'inheritdoc' => 'inline',
                ],
            ],
            'phpdoc_to_comment' => false,
            'phpdoc_trim' => true,
            'phpdoc_trim_consecutive_blank_line_separation' => true,
            'phpdoc_types' => true,
            'phpdoc_types_order' => [
                'null_adjustment' => 'always_last',
            ],
            'phpdoc_var_without_name' => true,
            'psr_autoloading' => false,
            'return_type_declaration' => ['space_before' => 'none'],
            'self_accessor' => false,
            'self_static_accessor' => true,
            'semicolon_after_instruction' => true,
            'short_scalar_cast' => true,
            'simplified_null_return' => false,
            'single_blank_line_at_eof' => true,
            'single_class_element_per_statement' => [
                'elements' => ['const', 'property'],
            ],
            'single_import_per_statement' => true,
            'single_line_after_imports' => true,
            'single_line_comment_style' => [
                'comment_types' => ['hash'],
            ],
            'single_line_empty_body' => true,
            'single_quote' => true,
            'single_space_around_construct' => true,
            'single_trait_insert_per_statement' => true,
            'space_after_semicolon' => [
                'remove_in_empty_for_expressions' => true,
            ],
            'spaces_inside_parentheses' => true,
            'standardize_not_equals' => true,
            'statement_indentation' => true,
            'switch_case_semicolon_to_colon' => true,
            'switch_case_space' => true,
            'ternary_operator_spaces' => true,
            'trailing_comma_in_multiline' => true,
            'trim_array_spaces' => true,
            'type_declaration_spaces' => true,
            'types_spaces' => true,
            'unary_operator_spaces' => [
                'only_dec_inc' => true,
            ],
            'visibility_required' => true,
            'whitespace_after_comma_in_array' => [
                'ensure_single_space' => true,
            ],
            'yoda_style' => [
                'always_move_variable' => false,
                'equal' => false,
                'identical' => false,
                'less_and_greater' => false,
            ],
        ]);
    }
}
